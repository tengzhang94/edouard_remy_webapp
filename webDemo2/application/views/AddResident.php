<div class="container-fluid">
    <div class="row">
        <form class="form-horizontal"  method="post" action="addResidentConfirm">
            <div class="col-sm-10 col-xs-12" style="padding-top: 10px;">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="firstname"><p class="residentInfoStyle">First name:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="border-radius: 0px;" id="firstname" placeholder="{firstName}" name="firstName"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lastname"><p class="residentInfoStyle">{lastName}:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="border-radius: 0px;" id="lastname" placeholder="{lastName}" name="lastName"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="birthdate"><p class="residentInfoStyle">{birthDate}:</p></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" style="border-radius: 0px;" id="birthdate" placeholder="dd-mm-jj" name="birthDate"  required >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="children"><p class="residentInfoStyle">{children}:</p></label>
                    <div class="col-sm-8">
                        <input type="number" min="0" class="form-control" style="border-radius: 0px;" id="children" placeholder="{children}" name="children" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="room"><p class="residentInfoStyle">{room}:</p></label>
                    <div class="col-sm-8">
                        <input type="number" min="0" class="form-control" style="border-radius: 0px;" id="room" placeholder="{room}" name="room" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sector"><p class="residentInfoStyle">{sector}</p></label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" style="border-radius: 0px;" id="sector" placeholder="sector number "  name="sector"  required>
                        -->
                    <span class="dropdown">
                        <input class="form-control" style="width:300px" name="sector" type="hidden" id="sector" required> 
                        <button class="form-control" style="width:300px;border-radius: 0px;" placeholder="select sector" type="text" data-toggle="dropdown"  name="sectorChoice" id="selected" >Sectors<span class="caret"></span></button>
                        <ul class="dropdown-menu"> 
                            {sectors}
                                <li onclick="$('#selected').text($(this).text());$('#sector').val({idSector});">{name}</li>  
                            {/sectors}
                        </ul>
                    </span>
                    </div> 
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender"><p class="residentInfoStyle" >{gender}:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                        <input type="radio"  name="gender" value="Male" checked>{male}
                    </div>
                    <div class="radio-inline">
                            <input type="radio" name="gender" value="Female" >{female}
                    </div>
                    </div>   
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="married"><p class="residentInfoStyle">{married}:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline">
                            <input type="radio" name="married" value="1" checked>Yes
                        </div>
                        <div class="radio-inline">
                        <input type="radio" name="married" value="0">{no}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="language"><p class="residentInfoStyle">Language:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline">
                            <input type="radio" name="language" value="dutch" checked>Dutch
                        </div>
                        <div class="radio-inline">
                        <input type="radio" name="language" value="english">English
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group" style="margin-top: -23px;">
                <div class="col-sm-4 col-sm-offset-2 col-xs-12 ">
                    <input type="submit" class="btn-confirm" style="height:30px;" name="submit1" value="{submit}">
                </div>
                <div class="col-sm-4 col-sm-offset-1 col-xs-12">
                    <input type="button" class="btn-confirm" style="height:30px;" name="return1" onclick="location='resident'" value="{cancel}">
                </div>
                </div>
                </div>
            </div>
            </form>
    </div>

       
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $(".dropdown .dropdown-menu li a")[0].click();
       
    });
    

    </script>
    
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 
