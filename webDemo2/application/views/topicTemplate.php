<p class="text-center">
    <div class="btn-group" role="group">
        <?php foreach($paragraph as $par){
            echo form_open('ResidentController/Question/0');
            echo form_hidden('idTopic', $par['idTopic']);
            $topicName = $par['topicName'];
            echo '<button class="btn btn-link" type="submit" style="margin-left:10px;"><small style="font-size:20px;">' . $topicName . '</small><img src="' . base_url() . 'assets/css/image/icons8-start.png"></button>';
            echo form_close();
        }?>
    </div>
</p>