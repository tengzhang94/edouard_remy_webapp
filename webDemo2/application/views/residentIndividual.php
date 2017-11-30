<div class="row" display="height:calc(100vh - 60px)">
    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 residentInfoCol">
        <div id="infoDiv"><span id="residentHeader"><span id="imgSpan"><img src="<?php echo base_url() ?>assets/css/image/icons8-clock-red.png" id="iconClock"><img src="{photo}" id="image"><img src="<?php echo base_url() ?>assets/css/image/happyhappy.png" id="iconSmiley"></span><span class="infoTitleTxt">{firstName} {lastName}</span>
                <span
                    class="infoTitleTxt">Kamer {roomNr}</span>
            </span><span id="residentContent"><span id="sector" class="infoTxt">Afdeling: {sector}</span><span id="language" class="infoTxt">Taal: {language}</span><span id="birthday" class="infoTxt">Geboortedatum: {birthday}</span>
                <span
                    id="gender" class="infoTxt">Geslacht: {gender}</span><span id="isMarried" class="infoTxt">Getrouwd: {married}</span><span id="children" class="infoTxt">Kinderen: {children}</span></span><span id="residentNotes"><span id="notesTitle">Notities <button class="btn btn-default" type="button" id="addBtn"><img src="<?php echo base_url() ?>assets/css/image/icons8-plus-100.png" id="iconAdd"></button></span>
                {notes}
                <span class="infoTxt">{text}</span>
                {/notes}
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 residentInfoCol" id="rightInfoCol">
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="problemLeftCol"><span class="problemTitle">Korte termijn <button class="btn btn-default" type="button" id="removeBtn"><img src="<?php echo base_url()?>assets/css/image/icons8-trash-100.png" id="iconTrash" /></button><button class="btn btn-default" type="button" id="addBtn"><img src="<?php echo base_url()?>assets/css/image/icons8-plus-100.png" id="iconAdd" /></button></span>
                <span
                    class="space"> </span>
                <div class="line">
                    <label>
                        <input type="checkbox" /><span class="checkmark"></span></label>
                    {nonUrgProbs}
                    <div class="message">{text}</div>
                    {/nonUrgProbs}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="problemTitle"><button class="btn btn-default" type="button" id="removeBtn"><img src="<?php echo base_url()?>assets/css/image/icons8-trash-100.png" id="iconTrash" /></button>Lange termijn <button class="btn btn-default" type="button" id="addBtn"><img src="<?php echo base_url()?>assets/css/image/icons8-plus-100.png" id="iconAdd" /></button></span>
                <span
                    class="space"> </span>
                <div class="line">
                    <label>
                        <input type="checkbox" /><span class="checkmark"></span></label>
                    {urgProbs}
                    <div class="message">{text}</div>
                    {/urgProbs}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CODE FOR SECOND NAVITEM (=PROBLEMS) (CSS ALREADY ADDED!) -->


