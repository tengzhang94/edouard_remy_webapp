<!DOCTYPE html>
<html>

    <html>
        <head>
            <title>GraceAge 2.0 - Caregiver</title>
            <meta charset="UTF-8">
        <a href="application/views/questionpage.php"></a>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url();?>/assets/css/dashDemo.less""/>
            <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
        </head>

        <body>
            <div>
                <p class="text-right" id="header" style="font-family: 'Lato',sans-serif;color:#1e1e1e;background-color:rgba(25,118,210,0.6)"><span class="float_left">GraceAge 2.0</span></p>
                <!--navigation-->
                <div class="navbar navbar-fixed-left">  
<!--                    <ul class="nav navbar-nav">                        
                        <li><a href="#"> <img src="/assets/css/image/icons8-home-50.png"> <span> Homepage </span></a></li>
                        <li><a href="#"> <img src="/assets/css/image/icons8-customer-50.png"> <span> Resident</span></a></li>
                        <li><a href="#"> <img src="/assets/css/image/icons8-message-50.png"> <span> Messages </span></a></li>
                        <li><a href="#"> <img src="/assets/css/image/icons8-combo-chart-50.png"> <span> Statistics </span></a></li>
                        <li><a href="#"> <img src="/assets/css/image/icons8-settings-50.png"> <span> Settings </span></a></li>
                        <li><a href="#"> <img src="/assets/css/image/icons8-exit-50.png"> <span> Logout </span></a></li>
                    </ul>-->
                </div> 
<!--                <div class="column" style="display:flex; flex-direction:column;width:100%">
                    <div class="column1" style="display:flex; flex-direction:column;width:100%">
                        <div class="row1" style="display:flex; flex-direction:row;width:100%">
                            <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/face1.png" width="20"/></button>
                            </div>
                            <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/face1.png" width="20"/></button>
                            </div>
                            <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/face1.png" width="20"/></button>
                            </div>                           
                        </div>
                        <div class="row2" style="display:flex; flex-direction:row;width:100%">
                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 0px;margin-left: 20px; 
                                      font-size: 10px;color:#333333;">Delete</h2>
                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 0px;margin-left: 20px; 
                            font-size: 10px;color:#333333;">Delete</h2>
                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 0px;margin-left: 20px; 
                            font-size: 10px;color:#333333;">Delete</h2>
                            
                        </div>                        
                    </div>
                    <div class="row3" style="display:flex; flex-direction:row;width:100%">
                        <div class="column2" style="display:flex; flex-direction:column;width:100%">
                            <u1 class="checkbox">

                                <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                    <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/face1.png" width="20"/></button>
                                </div>
                                <h2 type="text"style="font-family: 'Lato', sans-serif; 
                                          font-size: 10px;color:#333333;">SelectAll</h2>
                                <input id="cbox2" type ="checkbox" style="margin-top: 35px;margin-bottom: 30px"/>
                                <input id="cbox3" type ="checkbox" style="margin-top: 105px;margin-bottom: 30px"/>
                                <input id="cbox4" type ="checkbox" style="margin-top: 175px;margin-bottom: 30px"/>
                                <input id="cbox5" type ="checkbox" style="margin-top: 245px;margin-bottom: 30px"/>
                                <input id="cbox6" type ="checkbox" style="margin-top: 315px;margin-bottom: 30px"/>
                            </u1>
                        </div>
                        <div class="column3" style="display:flex; flex-direction:column;width:100%">
                            <div id = "text1">
                                <div id = "text1_1">--The general sccore on "comfort" on floor 2 has reduced.</div>
                            </div> 
                            <div id = "text2">
                                <div id = "text1_2">--23 residents filled in the questionnaires today! </div>  
                            </div>
                            <div id = "text3">
                                <div id = "text1_3">--Four people are late for filling in the questionnaire.</div>  
                            </div>
                            <div id = "text4">
                                <div id = "text1_4">--Tomorrow is Jane's 90 years' old birthday, don't forget to celebrate for her.</div>  
                            </div>
                            <div id = "text5" style="display:flex; flex-direction: row">
                                <div id = "text5" style="display:flex; flex-direction: column">
                                    <div id = "text1_5">
                                        <div id = "text2_5">Overrall Acticity</div>  
                                    </div>
                                    <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                        <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/face1.png" width="20"/></button>
                                    </div>                            
                                </div>
                                <div id = "text1_5">
                                    <div id = "text2_5">Overall Score</div>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>-->
                
                
                <div class="row" style="display:flex; flex-direction:row;width:100%">
                
                    <div class="column1" style="display:flex; flex-direction: column;margin-left: 15%;margin-top:20px">
                        <u1 class="checkbox">
                            
                            
                            <input id="cbox2" type ="checkbox" style="margin-top: 100px;margin-bottom: 30px"/>
                            <input id="cbox3" type ="checkbox" style="margin-top: 170px;margin-bottom: 30px"/>
                            <input id="cbox4" type ="checkbox" style="margin-top: 240px;margin-bottom: 30px"/>
                            <input id="cbox5" type ="checkbox" style="margin-top: 310px;margin-bottom: 30px"/>
<!--                            <input id="cbox6" type ="checkbox" style="margin-top: 315px;margin-bottom: 30px"/>-->
                        </u1>
                    </div>
              
                    <div class="column2" style="display:flex; flex-direction: column;margin-left: 2%;width:100%;margin-top: 30px"> 
                        <div class="row2" style="display:flex; flex-direction: row;margin-left: 2%;width:100%">
                            <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-checkbox.png" width="20"/></button>
                            </div>
                            <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-trash.png" width="20"/></button>
                            </div>
                            <div class="col-md-2" align="left" style="margin-bottom: 5px; margin-left: 70%">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-filter.png" width="20"style="margin-right:20px"/></button>
                            </div>
                            
                        </div>
                        <div class="row2" style="display:flex; flex-direction: row;margin-left: 2%;width:100%">
                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-left: 1%;
                                    font-size: 10px;color:#333333;">SelectAll</h2>
                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-left: 7%;
                                    font-size: 10px;color:#333333;">Delete</h2>
                            
                        </div>
          
                        <div id = "text1">
                            <div id = "text1_1">--The general sccore on "comfort" on floor 2 has reduced.</div>
                        </div> 
                        <div id = "text2">
                            <div id = "text1_2">--23 residents filled in the questionnaires today! </div>  
                        </div>
                        <div id = "text3">
                            <div id = "text1_3">--Four people are late for filling in the questionnaire.</div>  
                        </div>
                        <div id = "text4">
                            <div id = "text1_4">--Tomorrow is Jane's 90 years' old birthday, don't forget to celebrate for her.</div>  
                        </div>
                        <div id = "text5" style="display:flex; flex-direction: row">
                            <div id = "text5" style="display:flex; flex-direction: column">
                                <div id = "text1_5">
                                    <div id = "text2_5">Overrall Acticity</div>
                                    <div id = "text5" style="display:flex; flex-direction:column;">
                                        <div class="col-md-2" align="left" style="margin-bottom: 5px;margin-left: 45%">
                                            <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/redClock.png" width="60"/></button>
                                        </div>                          
                                        <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 20px; margin-left: 15%;
                                            font-size: 15px;color:#333333;">>2 weeks
                                        </h2>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div id = "text5" style="display:flex; flex-direction: column">
                                <div id = "text1_5" style="display:flex; flex-direction: column">
                                    <div id = "text2_5">Overrall Score</div>                                                                
                                        <div id = "text5" style="display:flex; flex-direction: row">
                                            <h2 type="text"style="font-family: 'Lato', sans-serif; margin-top: 10px;margin-left: 45%; 
                                              font-size: 40px;color:#333333;">3</h2>
                                            <div class="col-md-2" align="left" style="margin-bottom: 5px;position:center">
                                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/blueArrow.png" width="60"/></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!--                    <div class="column3" style="display:flex; flex-direction: column;margin-top:20px">                       
                        <div class="col-md-2" align="left" style="margin-bottom: 5px; margin-right: 60px">
                            <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/icons8-filter.png" width="20"style="margin-right:20px"/></button>
                        </div>
      
                        <div class="col-md-2" align="left" style="margin-bottom: 5px">
                                <button id="b1" style="height:0px; width:0px " type="submit"><img id="img1" src="http://a17-webapps04.studev.groept.be/assets/css/image/redFlag.png" width="60"/></button>
                        </div>
                    </div>-->
                </div>
            </div>
        </body>
    </html>


