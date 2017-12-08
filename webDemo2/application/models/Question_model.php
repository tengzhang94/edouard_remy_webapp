<?php

class Question_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getQuestions($topicId) {
        if (!isset($topicId)) {
            $topicId = 1;
        }
        $questionLang = $this->session->questionLang; //get the right columnname for the language
        $topicLang = $this->session->topicLang; //get the right columnname for the language
        //get the questions and store them temporarily in session
        $questions = $this->db->query("SELECT idQuestion, $questionLang AS questionString FROM Questions WHERE Topics_idTopic = '$topicId'");
        $this->session->set_userdata('topicQuestions', $questions->result());   //get all questins of current topic and store them in session
        //get the topic name and store it temporarily in session
        $topicName = $this->db->query("SELECT $topicLang AS topicName FROM Topics WHERE idTopic = '$topicId'");
        $this->session->set_userdata('topicName', $topicName->result()[0]->topicName);
    }

    public function getTopics() {
        $topicLang = $this->session->topicLang; //get the right columnname for the language
        $query = $this->db->query("SELECT idTopic, $topicLang AS topicName FROM Topics");
        return $query->result_array();
    }

    public function getScores($sector) {
        $total = NULL;
        if ($sector == -1) {
            $residents = $this->db->query("SELECT idResident from Resident")->result();   //select all residents from a sector
        } else {
            $residents = $this->db->query("SELECT idResident from Resident "
                            . "WHERE Sectors_idSector = '$sector'")->result();   //select all residents from a sector
        }
        if ($residents == null)
            return null;
        //loop over all topics
        for ($topic = 0; $topic <= 11; $topic++) {
            $i = 0;
            $all_residents = null;
            foreach ($residents as $res) {
                $all_residents[$i] = $res->idResident;
                $i++;
            }
            if (isset($residents))
                $r = join("','", $all_residents);
            else
                $r = '';
            $fill_in_ids = $this->db->query("SELECT id_fill_in FROM Resident_fills_in_Topics "
                            . "WHERE Timestamp IN (SELECT MAX(Timestamp) "
                            . "FROM Resident_fills_in_Topics "
                            . "WHERE Resident_idResident IN ('$r')"
                            . "GROUP BY Resident_idResident) "
                            . "AND Topics_idTopic = '$topic'")->result();

            if ($fill_in_ids == null)
                return null;
            $j = 0;
            $all_ids = null;
            foreach ($fill_in_ids as $id) {
                $all_ids[$j] = $id->id_fill_in;
                $j++;
            }
            $ids = join("','", $all_ids);
            $topic_scores = $this->db->query("SELECT ROUND(AVG(Answer), 2) AS avg "
                            . "FROM Answers "
                            . "WHERE fill_in_id IN ('$ids')")->row();

            $question_scores = $this->db->query("SELECT Questions_idQuestion AS qId, "
                            . "ROUND(AVG(Answer), 2) AS avg "
                            . "FROM Answers "
                            . "WHERE fill_in_id IN ('$ids') "
                            . "GROUP BY Questions_idQuestion")->result();

            $total['topic_avg'][$topic] = $topic_scores->avg;
            $total['question_avgs'][$topic] = $question_scores;
        }
        return $total;
    }

}
