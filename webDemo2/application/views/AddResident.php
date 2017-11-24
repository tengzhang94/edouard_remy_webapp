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
    <div>
        <p class="text-right"><span class="float_left">AddResident</span><span class="float_right" style="background-color:#2c3d51;">LetterSize
                <button class="btn btn-primary" type="button" style="margin-left:10px;">Bigger</button>
                <button class="btn btn-primary" type="button">Smaller</button></span></p>
        
    </div>
    <div class="row">
        <div class="column">
      
        <button class="btn-photo">Photo upload</button>   
        </div>
        
        <form class="form-horizontal" method="post" action="addResident">
            <div class="column">
                <div class="form-group">
      <!--                <p class="float_right"><span class="text-right1">Naam: <input type="text" placeholder="naam" name="firstName"></span></p><br>-->
                    <label class="control-label col-sm-2" for="email">Firstname:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" placeholder="first name " style="width:200px;"name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Lastname:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" placeholder="last name " style="width:200px;"name="lasttname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Birthdate:</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthdate" placeholder="dd/mm/jj" style="width:200px;"name="birthdate">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1">Gender:<span class="float_right1"><input type="radio" style="margin-left: -45px;font-size:28px;" name="gender" value="Male" checked>Male<input type="radio" style="margin-left: 40px;font-size:28px;" name="gender" value="Female">Female</span></span></p>
                </div>                                                                                 
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1">Married:<span class="float_right1"><input type="radio" style="margin-left: -75px;font-size:28px;" name="married" value="1" checked>Yes<input type="radio" style="margin-left: 51px;font-size:28px;" name="married" value="0">No</span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
<!--                <p class="float_right"><span class="text-right1">Kinderen:<input  type="text" placeholder="kinderen" name="children"></span></p><br>-->
                <p class="float_right"><span class="text_right1">Children:<span class="float_right1"><input type="radio" style="margin-left: -75px;font-size:28px;" name="children" value="1" checked>Yes<input type="radio" style="margin-left: 51px;font-size:28px;" name="children" value="0">No</span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
<!--                <p class="float_right"><span class="text-right1">Anderen: <input  type="text" placeholder="anderen" name="other"></span></p><br>-->
                <p class="float_right"><span class="text_right1">Others:<span class="float_right1"><input class="form-control" type="text" name="others" placeholder="others" ></span></span></p>
                </div>
            </div>
            <div class="form-group" style="height:55px;">
                    <button class="btn-confirm" type="submit">Submit</button>
                    <button class="btn-confirm" type="button">Cancel</button>
                </div>
        </form>        
    </div>
</body>

</html>
