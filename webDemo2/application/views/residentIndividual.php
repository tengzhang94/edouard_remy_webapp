<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery2.2.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>

<div class="row" display="height:calc(100vh - 60px)">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  residentInfoCol">
        <div id="infoDiv">
            <span id="residentHeader"><span id="imgSpan"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" id="iconClock"><img src="{photo}" id="image"><img src="<?php echo base_url() ?>assets/css/image/happyhappy.png" id="iconSmiley"></span><span class="infoTitleTxt">{firstName} {lastName}</span>
                <span class="infoTitleTxt">{room} {roomNr}</span>
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
                    <button class="btn btn-default addBtn" type="button" id="addBtn3" data-toggle="modal" data-target="#myModal">
                        <img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd" />
                    </button>
                    
                </span>
            </span>
 
            <form  action="deleteNotes" method="post" id="deleteNotes">
                {notes}
                <div class="line">
                    <label>
                        <input type="checkbox" name="delete_notes[]" value='{noteId}' />
                        <span class="checkmark"></span>
                    </label>
                    <div class="message messageProbs">{text}</div>
                </div>
                {/notes}
            </form>
            
            <form method="post" action="addNewNote" >
                    <div class="line">
                        <label>
                            <input type="checkbox" /><span class="checkmark" style="display:none"></span></label>
                        <div class="message" id="inputMessage3">
                            <input name="newNote" class = "text textProb" id="inputBlock3" style="display:none">
                            <button type="submit" id="nonUrgProb_submit" style="display: none"></button>
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
                <div class="statItem"><span class="subjectTitle">Privacy </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Comfort </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Responsiviteit Zorgverleners</span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Persoonlijke Omgang</span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="statColMiddle">
                <div class="statItem"><span class="subjectTitle">Maaltijden </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Autonomie </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Band bewoner - zorgverlener</span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Informatie krijgen</span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="statColRight">
                <div class="statItem"><span class="subjectTitle">Veiligheid </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Respect </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
                <div class="statItem"><span class="subjectTitle">Activiteiten </span><span class="subjectInfo">6 <img src="<?php echo base_url() ?>assets/css/image/icons8-arrow.png" class="arrow"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" class="clock"></span></div>
            </div>            
        </div>
        <div class="row" id="personalProblems" {problems_hidden}>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="problemLeftCol"><span class="problemTitle">Korte termijn 
                  
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
                            <input name="nonUrgProb" class = "text textProb" id="inputBlock1" style="display:none">
                            <button type="submit" id="note_submit" style="display: none"></button>
                        </div>
                    </div>
                </form>
                
             
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="problemTitle">
                    <button class="btn btn-default removeBtn" type="submit" id="removeBtnNonUrg"  form="deleteUrgPro"><img src="<?php echo base_url() ?>assets/css/image/icons8-trash-100.png" id="iconTrash" /></button>Lange termijn
                    <button class="btn btn-default addBtn" type="submit" id="addBtn2"><img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd" /></button></span>
                <span
                    class="space"> </span>
                    
                <form  action="deleteProblems" method="post" id="deleteUrgPro">
                    {urgProbs}
                    <div class="line">
                        <label>
                            <input type="checkbox" name="delete_problem[]" value='{idProblem}'/><span class="checkmark"></span></label>
                        <div class="message messageProbs">{text}</div>
                    </div>
                    {/urgProbs}
               </form>        
                
                
                
                <form method="post" action="addUrgProbs">
                    <div class="line">
                        <label>
                            <input type="checkbox" /><span class="checkmark" style="display:none"></span></label>
                        <div class="message" id="inputMessage2" style="display:none">
                            <input name="urgProb" class = "text textProb" id="inputBlock2" style="display:none; ">
                            <button type="submit" id="urgProb_submit" style="display: none"></button>
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
                $("#nonUrgProb_submit").click();
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
                $("#urgProb_submit").click();
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
                $("#note_submit").click();
            }
        });
        
    });
      
        
  
  
  
  
      
     
    </script>


<!-- CODE FOR SECOND NAVITEM (=PROBLEMS) (CSS ALREADY ADDED!) -->


