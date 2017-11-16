<!DOCTYPE html>
<html>
    <head>
        <title>GraceAge 2.0 - Resident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="http://localhost/a17_webApps04/webDemo2/assets/css/Resident.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>
    <body>
        <div>
            <p class="text-right" id="header"><span class="float_left">{topic}</span><span class="float_right">{font_size}<button class="btn btn-primary" type="button" style="margin-left:10px;">{greater} </button><button class="btn btn-primary" type="button">{smaller} </button></span></p>
            <p
            class="text-center" style="margin-top:60px;">{question}</p>
                <form style="margin-top:120px;" action="" id='questionForm' onsubmit="return nextQuestion()">
                    <div class="form-group">
                        <?php echo form_input($hiddenQuestionNr)?>
                        <button class="btn btn-link question" type="submit"><small>{verybad}</small><img src="<?php echo base_url();?>assets/css/image/sad.png"></button>
                        <button class="btn btn-link" type="submit"><small>{bad}</small><img src="<?php echo base_url();?>assets/css/image/sadsad.png"></button>
                        <button class="btn btn-link" type="submit"><small>{ok}</small><img src="<?php echo base_url();?>assets/css/image/sadsadsad.png"></button>
                        <button class="btn btn-link" type="submit"><small>{good}</small><img src="<?php echo base_url();?>assets/css/image/happy.png"></button>
                        <button class="btn btn-link" type="submit"><small>{verygood}</small><img src="<?php echo base_url();?>assets/css/image/happyhappy.png"></button>
                    </div>
                </form>
        </div>
        <script type="text/javascript" src ="<?php echo base_url();?>assets/javascript/questionpage.js"></script>
    </body>

</html>