<!DOCTYPE html>



<!--<head>
    <title>GraceAge 2.0 - Caregiver</title>
    <meta charset="UTF-8">
<a href="application/views/questionpage.php"></a>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/dashDemo.less"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
</head>-->


<div class="row1" style="display:flex; flex-direction: row;width:100%">
    <div class="col-md-2">
        <button id="b1" style="border:0;background: transparent " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-checkbox.png" width="20"/></button>
    </div>
    <div class="col-md-2" align="left">
        <button id="b1" style="border:0;background: transparent " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-trash.png" width="20"/></button>
    </div>
    <div class="col-md-2" align="left" style="margin-bottom: 5px; margin-left: 70%">
        <button id="b1" style="border:0;background: transparent " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-filter.png" width="20"style="margin-right:20px"/></button>
    </div>
</div>

<div class="row2" style="display:flex; flex-direction: row;width:100%">
    <h2 type="text"style="font-family: 'Lato', sans-serif; margin-left: 1%;
        font-size: 10px;color:#333333;">SelectAll</h2>
    <h2 type="text"style="font-family: 'Lato', sans-serif; margin-left: 7%;
        font-size: 10px;color:#333333;">Delete</h2>

</div>

{messages}
<div class="row3" style="display:flex; flex-direction: row;width:100%">
    <input id="cbox1" type ="checkbox" style="margin-top: 30px;margin-left: 2%"/>
    <div id = "text1" style="margin-left: 3%">
        <div id = "text1_1">{messageText}</div>
    </div>                
</div>
{/messages}

<div class="row7" style="display:flex; flex-direction: row;width:90%; margin-left:6%">
    <div id = "text5" style="display:flex; flex-direction: column">
        <div id = "text1_5">
            <div id = "text2_5">Overall Activity</div>
            <div id = "text5" style="display:flex; flex-direction:column;">
                <div class="col-md-2" align="left" style="margin-bottom: 5px;margin-left: 45%">
                    <button id="b1" style="border:0;background: transparent " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/redClock.png" width="60"/></button>
                </div>                          
                <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 20px; margin-left: 15%;
                    font-size: 15px;color:#333333;">>2 weeks
                </h2>
            </div>
        </div>
    </div>

    <div id = "text5" style="display:flex; flex-direction: column">
        <div id = "text1_5" style="display:flex; flex-direction: column">
            <div id = "text2_5">Overall Score</div>                                                                
            <div id = "text5" style="display:flex; flex-direction: row">
                <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 10px;margin-left: 45%; 
                    font-size: 40px;color:#333333;">3</h2>
                <div class="col-md-2" align="left" style="margin-bottom: 5px;position:center">
                    <button id="b1" style="border:0;background: transparent " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/blueArrow.png" width="60"/></button>
                </div>
            </div>
        </div>
    </div> 
</div>      



