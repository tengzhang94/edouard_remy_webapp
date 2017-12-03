<?php echo form_open('ResidentController/Question/0');?>
    <div class="form-group">
        <?php foreach($paragraph as $par){
            $topicName = wordwrap($par['topicName'], 20, "<br />");
            echo '<button class="btn btn-link" name="' . $par['idTopic'] . '" type="submit" style="margin-left:10px;"><small>' . $topicName . '</small><img src="' . base_url() . 'assets/css/image/icons8-topic-' . $par['idTopic'] .'.png"></button>';
        }?>
    </div>
<?php echo form_close();?>