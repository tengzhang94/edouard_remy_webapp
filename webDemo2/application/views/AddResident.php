<!DOCTYPE html>
 
<html>
    <head>
        <title>GraceAge 2.0 - addResident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url();?>assets/css/addResident.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

<body>
    <!--<div>
        <p class="text-right"><span class="float_left">AddResident</span><span class="float_right" style="background-color:#2c3d51;">LetterSize
                <button class="btn btn-primary" type="button" style="margin-left:10px;">Bigger</button>
                <button class="btn btn-primary" type="button">Smaller</button></span></p>
        
    </div> -->
    <div class="row">
        <div class="column" >
      
        <button class="btn-photo">Photo upload</button>   
        </div>
        
        <form class="form-horizontal" method="post" action="addResident">
            <div class="column">
                <div class="form-group" style="height:55px;">
      <!--                <p class="float_right"><span class="text-right1">Naam: <input type="text" placeholder="naam" name="firstName"></span></p><br>-->
                    <label class="control-label col-sm-2" for="firstname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Firstname:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" placeholder="first name " style="width:250px;margin-top: 5px;"name="firstName">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-2" for="lastname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Lastname:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" placeholder="last name " style="width:250px;margin-top: 5px;" name="lastName">
                    </div>
                </div>
                <div class="form-group" style="height:55;">
                    <label class="control-label col-sm-2" for="birthdate" style=" font-family:  Lato, sans-serif; font-size: 20px;">Birthdate:</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthdate" placeholder="dd-mm-jj" style="width:250px;margin-top: 5px;" name="birthDate">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-2" for="gender" style=" font-family:  Lato, sans-serif; font-size: 20px;">Gender:</label>
                    <div class="col-sm-10">
                        <input type="radio" style="float: left; margin-left: 30px;margin-top: 15px;" name="gender" value="Male" checked><p style="float:left;margin-top: 12px">Male</p><input type="radio" style="float:left;margin-left: 32px;margin-top: 15px;" name="gender" value="Female"><p style="float:left;margin-top: 12px">Female</p>
                    </div>   
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-2" for="married" style=" font-family:  Lato, sans-serif; font-size: 20px;">Married:</label>
                    <div class="col-sm-10">
                        <input type="radio" style="float: left; margin-left: 30px;margin-top: 15px;" name="married" value="1" checked><p style="float:left;margin-top: 12px">Yes</p><input type="radio" style="float:left;margin-left: 40px;margin-top: 15px;" name="married" value="0"><p style="float:left;margin-top: 12px">No</p>
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-2" for="children" style=" font-family:  Lato, sans-serif; font-size: 20px;">Children:</label>
                    <div class="col-sm-10">
                    <input type="radio" style="float: left; margin-left: 30px;margin-top: 15px;" name="children" value="1" checked><p style="float:left;margin-top: 12px">Yes</p><input type="radio" style="float:left;margin-left: 40px;margin-top: 15px;" name="children" value="0"><p style="float:left;margin-top: 12px">No</p>
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-2" for="others" style=" font-family:  Lato, sans-serif; font-size: 20px;">Others:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="others" placeholder="others "style="width:250px;margin-top: 5px;" name="others">
                    </div>
                </div>
                
            </div>
            <div class="form-group" style="height:55px;">
                    <button class="btn-confirm" type="submit">Submit</button>
                    <button class="btn-confirm" type="button">Cancel</button>
            </div>
        </form>        
    
</body>

</html>
