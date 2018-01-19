<div class="container-fluid">
    <div class="row">
        <form class="form-horizontal" method="post" action="addResidentConfirm">
            <div class="col-sm-10  col-xs-12">
                <div class="form-group" style="margin-top: 30px;">
                    <label class="control-label col-sm-4" for="firstname"><p class="residentInfoStyle">First name:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="border-radius: 0px;" id="firstname" placeholder="first name" name="firstName"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lastname"><p class="residentInfoStyle">Last name:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="border-radius: 0px;" id="lastname" placeholder="last name " name="lastName"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="birthdate"><p class="residentInfoStyle">Birth date:</p></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" style="border-radius: 0px;" id="birthdate" placeholder="dd-mm-jj" name="birthDate"  required >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="children"><p class="residentInfoStyle">Children:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" style="border-radius: 0px;" id="children" placeholder="children number " name="children" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="room"><p class="residentInfoStyle">Room:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" style="border-radius: 0px;" id="room" placeholder="room number " name="room" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sector"><p class="residentInfoStyle">Sector</p></label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" style="border-radius: 0px;" id="sector" placeholder="sector number "  name="sector"  required>
                        -->
                    <span class="dropdown">
                        <input class="form-control" style="width:300px" name="sector" type="hidden" id="sector"> 
                        <button class="form-control" style="width:300px" placeholder="select sector" type="text" data-toggle="dropdown"  name="sectorChoice" id="selected" >Sectors<span class="caret"></span></button>
                        <ul class="dropdown-menu"> 
                            {sectors}
                                <li onclick="$('#selected').text($(this).text());$('#sector').val({idSector});">{name}</li>  
                            {/sectors}
                        </ul>
                    </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender"><p class="residentInfoStyle" >Gender:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                        <input type="radio"  name="gender" value="Male" checked>Male
                    </div>
                    <div class="radio-inline">
                            <input type="radio" name="gender" value="Female" >Female
                    </div>
                    </div>   
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="married"><p class="residentInfoStyle">Married:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline">
                        <input type="radio" name="married" value="1" checked>Yes
                        </div>
                        <div class="radio-inline">
                        <input type="radio" name="married" value="0">No
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                <div class="form-group"style="height:20px;margin-top: -30px;">
                <div class="col-sm-5 col-sm-offset-1 col-xs-12 ">
                    <input type="submit" class="btn-confirm" name="submit1" value="Submit">
                </div>
                <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                    <input type="button" class="btn-confirm" name="return1" onclick="location='resident'" value="Cancel">
                </div>
            </div>
             </div>
            </div>
            </form>
    </div>

       
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#file").on("change",function()
        {
            var files=$(this)[0].files;
            if(files.length>=1)
           
        {
                $("#upload_button").click();
            }
           
        
        });
        
      
    });
    

    </script>
 
  <!--   <script>

        $(document).ready(function(){
            $(".dropdown-menu li").click(function(){
            $("#selected").text($(this).text());
            $('#sector').val('1');
            });
        });
    </script>
  -->