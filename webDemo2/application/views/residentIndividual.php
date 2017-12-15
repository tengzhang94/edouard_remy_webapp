
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>

<div class="row" display="height:calc(100vh - 60px)">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  residentInfoCol">
        <div id="infoDiv">
            <span id="residentHeader"><span id="imgSpan"><img src="{photo}" id="image"></span><span class="infoTitleTxt">{firstName} {lastName}</span>
                <span class="infoTitleTxt" >{room} {roomNr}</span>
               
            </span>
                <span id="residentContent"><span id="sector" class="infoTxt">{sectorString}: {sector}</span><span id="language" class="infoTxt">{languageString}: {language}</span><span id="birthday" class="infoTxt">{birthDate}: {birthday}</span>
                <span id="gender" class="infoTxt">{genderString}: {gender}</span>
                <span id="isMarried" class="infoTxt">{marriedString}: {married}</span>
                <span id="children" class="infoTxt">{childrenString}: {children}</span>
                </span>

            <span id="residentNotes">
                <span id="notesTitle">Notities
                    <button class="btn btn-default removeBtn" type="submit" id="removeNote"  form="deleteNotes">
                        <img src="<?php echo base_url() ?>assets/css/image/icons8-trash-100.png" id="iconTrash" />
                    </button>
                    <button class="btn btn-default addBtn" type="button" id="addBtn3">
                        <img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd" />
                    </button>
                </span>
            </span>
 
            <form  action="deleteNotes" method="post" id="deleteNotes">
                {notes}
                <div class="line linenote" >
                    <label>
                        <input type="checkbox" name="delete_notes[]" value='{noteId}' />
                        <span class="checkmark"></span>
                    </label>
                    <div class="message messageProbs">{text}</div>
                </div>
                {/notes}
            </form>
            
            <form method="post" action="addNewNote" >
                    <div class="line linenote">
                        <label>
                            <input type="checkbox" /><span class="checkmark" style="display:none"></span></label>
                        <div class="message" id="inputMessage3" style="display:none">
                            <textarea name="newNote" class = "text textProb" id="inputBlock3" style="display:none"></textarea>
                            <button type="submit" id="note_submit"  class="submitMessageBtn"><img class="submitMessageImg" src="<?php echo base_url() ?>assets/css/image/icons8-checkSubmit.png"/></button>
                        </div>                        
                    </div>         
            </form>
            
        </div>
    </div>
    
    <div class="col-lg-8 col-md-8 col-sm-6  residentInfoCol" id="rightInfoCol">
        <ul class="nav nav-tabs">
            <li class="{scores_active}"><a id=scoreLijstNavItem href="residentIndividual" class="navItem">Scorebord vragenlijst</a></li>
            <li class="{problems_active}"><a id="problemenNavItem" href="residentProblems" class="navItem">Problemen </a></li>
        </ul>

         <div class="row" id="personalStats" {scores_hidden}>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="statColLeft">
                <div class="statItem">
                    <span class="subjectTitle">Privacy </span>
                    <span class="subjectInfo">{scoreTopic1} <img src="<?php echo base_url() ?>{arrowImage1}" class="arrow">
                        <span class = "subjectInfo2">
                            <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                                <small class="timeText" id = "LastTime1">{LastTime1}d </small>
                            </div>
                        </span>
                    </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Comfort </span>
                    <span class="subjectInfo" >{scoreTopic2} <img src="<?php echo base_url() ?>{arrowImage2}" class="arrow">
                        <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime2">{LastTime2}d </small>
                        </div>
                        </span>
                    </span>
                </div>
                        
                <div class="statItem">
                    <span class="subjectTitle">Responsiviteit Zorgverleners</span>
                    <span class="subjectInfo" >{scoreTopic3} <img src="<?php echo base_url() ?>{arrowImage3}" class="arrow">
                    <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime3">{LastTime3}d </small>
                        </div>
                    </span>
                    </span>
                    
                </div>
                        
                <div class="statItem">
                    <span class="subjectTitle">Persoonlijke Omgang</span>
                   <span class="subjectInfo" >{scoreTopic4} <img src="<?php echo base_url() ?>{arrowImage4}" class="arrow">
                   <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime4">{LastTime4}d </small>
                        </div>
                    </span></span>
                    
                </div>
                        
            </div>
             
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="statColMiddle">
                <div class="statItem">
                    <span class="subjectTitle">Maaltijden </span>
                 <span class="subjectInfo" >{scoreTopic5} <img src="<?php echo base_url() ?>{arrowImage5}" class="arrow">
                 <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime5">{LastTime5}d </small>
                        </div>
                    </span>
                 </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Autonomie </span>
                  <span class="subjectInfo" >{scoreTopic6} <img src="<?php echo base_url() ?>{arrowImage6}" class="arrow">
                     <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime6">{LastTime6}d </small>
                        </div>
                    </span>
                  </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Band bewoner - zorgverlener</span>
                  <span class="subjectInfo" >{scoreTopic7} <img src="<?php echo base_url() ?>{arrowImage7}" class="arrow">
                    <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime7">{LastTime7}d </small>
                        </div>
                    </span>
                  </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Informatie krijgen</span>
                   <span class="subjectInfo" >{scoreTopic8} <img src="<?php echo base_url() ?>{arrowImage8}" class="arrow"><span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime8">{LastTime8}d </small>
                        </div>
                    </span>
                   </span>
                    
                </div>
            </div>
             
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="statColRight">
                <div class="statItem">
                    <span class="subjectTitle">Veiligheid </span>
                   <span class="subjectInfo" >{scoreTopic9} <img src="<?php echo base_url() ?>{arrowImage9}" class="arrow"><span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime9">{LastTime9}d </small>
                        </div>
                    </span>
                   </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Respect </span>
                   <span class="subjectInfo" >{scoreTopic10} <img src="<?php echo base_url() ?>{arrowImage10}" class="arrow">
                   <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime10">{LastTime10}d </small>
                        </div>
                    </span>
                   </span>
                    
                </div>
                
                <div class="statItem">
                    <span class="subjectTitle">Activiteiten </span>
                  <span class="subjectInfo" >{scoreTopic11} <img src="<?php echo base_url() ?>{arrowImage11}" class="arrow">
                  <span class = "subjectInfo2">
                        <div class="calendarDiv"><img src="<?php echo base_url() ?>assets/css/image/icon8-calendar.png" class="calendarIcon">
                            <small class="timeText" id = "LastTime11">{LastTime11}d </small>
                        </div>
                    </span>
                  </span>
                    
                </div>
            </div>            
        </div>
<!--            
            
        <div class="table-container" id="personalStats"{scores_hidden}>
            <table class="topicTable">
                <tbody>
                    <?php
                    $i=0;
                    foreach ($information as $data) {
                        echo '
                <tr><td><div class="statItem"><span class="subjectTitle">Privacy </span><span class="subjectInfo" style="font-size:40px;font-family:Lato, sans-serif;display:block;text-align:left;vertical-align:bottom; position:absolute;bottom:0;width:100%;">'.$data[""]["scoreTopic0"].' <img src='.base_url().$data["arrowImage"].'" class="arrow"></span>
                <span class = "subjectInfo2" style="  font-size:40px;font-family:Lato, sans-serif;display:block;text-align:right;vertical-align:bottom; position:absolute;bottom:0;width:100%; color:{colorSubject2}">'.$data["LastTime0"].' days</span></div>
                </div></td></tr>';
                    }
                    ?>



                </tbody>
            </table>
        </div>-->


        </div>
      
        <div class="row" id="personalProblems" {problems_hidden}>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="problemLeftCol"><span class="problemTitle">Korte termijn 
                  
                    <button class="btn btn-default removeBtn " type="submit" id="removeBtnNonUrg" form="deleteNonUrgPro"><img src="<?php echo base_url() ?>assets/css/image/icons8-trash-100.png" id="iconTrash" /></button>
                    <button class="btn btn-default addBtn" type="submit" id="addBtn1"><img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd" /></button></span>
                <span
                    class="space"> </span>
                    
                <form  action="deleteProblems" method="post" id="deleteNonUrgPro">
                    {nonUrgProbs}
                    <div class="line">
                        <label>
                            <input type="checkbox" name="delete_problem[]" value='{idProblem}' /><span class="checkmark"></span></label>
                    <div class="message messageProbs">{text}</div>
                    </div>
                    {/nonUrgProbs}
                </form>
                
                <form method="post" action="addNonUrgProbs">
                    <div class="line">
                        <label>
                            <input type="checkbox" /><span class="checkmark" style="display:none"></span></label>
                        <div class="message" id="inputMessage1" style="display:none">
                            <textarea name="nonUrgProb" class = "text textProb" id="inputBlock1" style="display:none"></textarea>
                            <button type="submit" id="nonUrgProb_submit" class="submitMessageBtn"><img class="submitMessageImg" src="<?php echo base_url() ?>assets/css/image/icons8-checkSubmit.png"/></button>
                        </div>
                    </div>
                </form>
                
             
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="problemTitle">
                    <button class="btn btn-default removeBtn" type="submit" id="removeBtnNonUrg"  form="deleteUrgPro"><img src="<?php echo base_url() ?>assets/css/image/icons8-trash-100.png" id="iconTrash" /></button>Lange termijn
                    <button class="btn btn-default addBtn" type="submit" id="addBtn2"><img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd" /></button></span>
                <span
                    class="space"> </span>
                    
                <form  action="deleteProblems" method="post" id="deleteUrgPro">
                    {urgProbs}
                    <div class="line">
                        <label>
                            <input type="checkbox" name="delete_problem[]" value='{idProblem}'/><span class="checkmark"></span></label>
                            <textarea class="message messageProbs">{text}</textarea>
                    </div>
                    {/urgProbs}
               </form>        
                
                
                
                <form method="post" action="addUrgProbs">
                    <div class="line">
                        <label>
                            <input type="checkbox" /><span class="checkmark" style="display:none"></span></label>
                        <div class="message" id="inputMessage2" style="display:none">
                            <textarea name="urgProb" class = "text textProb" id="inputBlock2" style="display:none;"></textarea>
                            <button type="submit" id="urgProb_submit" class="submitMessageBtn"><img class="submitMessageImg" src="<?php echo base_url() ?>assets/css/image/icons8-checkSubmit.png"/></button>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>

 <script>
    $(function() {
        $("#addBtn1").click(function() {
            $("#inputBlock1").removeAttr("style");
            $("#inputMessage1").removeAttr("style");
        });
  
        $("#inputBlock1").on( "keydown", function(event) {
            if(event.which === 13) 
            {
               return false;
            }
        });
      
        $("#addBtn2").click(function() {
            console.log("aaa");
            $("#inputBlock2").removeAttr("style");
            $("#inputMessage2").removeAttr("style");
        });
        
        $("#inputBlock2").on( "keydown", function(event) {
            if(event.which === 13) 
            {
                return false;
            }
        });
        
        $("#addBtn3").click(function() {
            console.log("aaa");
            $("#inputBlock3").removeAttr("style");
            $("#inputMessage3").removeAttr("style");
        });
        
        $("#inputBlock3").on( "keydown", function(event) {
            if(event.which === 13) 
            {
               return false;
            }
        });
        
        $('#LastTime1').css('color','<?php echo '{colorSubject1}'?>');
        $('#LastTime2').css('color','<?php echo '{colorSubject2}'?>');
        $('#LastTime3').css('color','<?php echo '{colorSubject3}'?>');
        $('#LastTime4').css('color','<?php echo '{colorSubject4}'?>');
        $('#LastTime5').css('color','<?php echo '{colorSubject5}'?>');
        $('#LastTime6').css('color','<?php echo '{colorSubject6}'?>');
        $('#LastTime7').css('color','<?php echo '{colorSubject7}'?>');
        $('#LastTime8').css('color','<?php echo '{colorSubject8}'?>');
        $('#LastTime9').css('color','<?php echo '{colorSubject9}'?>');
        $('#LastTime10').css('color','<?php echo '{colorSubject10}'?>');
        $('#LastTime11').css('color','<?php echo '{colorSubject11}'?>');
        
        $("#scoreLijstNavItem").click(function() { 
            $("#scoreLijstNavItem").css('background-color','#f4f4f4');
            $("#problemenNavItem").css('background-color','#fff' );
        });
        
        $("#problemenNavItem").click(function() { 
            $("#problemenNavItem").css('background-color', '#00000' );
            $("#scoreLijstNavItem").css('background-color','#fff' );
        });

    </script>


<!-- CODE FOR SECOND NAVITEM (=PROBLEMS) (CSS ALREADY ADDED!) -->


