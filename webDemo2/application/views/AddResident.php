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
        
        <form method="post" action="addResident">
            <div class="column">
                <div class="form-group" style="height:55px;">
      <!--                <p class="float_right"><span class="text-right1">Naam: <input type="text" placeholder="naam" name="firstName"></span></p><br>-->
                    <p class="float_right"><span class="text_right1">Firstname:<span class="float_right1"><input class="form-control" type="text" name="firstName" placeholder="firstName" ></span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1">Lastname:<span class="float_right1"><input class="form-control" type="text" name="lastName" placeholder="lastName" ></span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1"> Birthdate:<span class="float_right1"><input class="form-control" type="date" name="birthDate" placeholder="birthDate" min="1917-01-01" max="1980-01-01"></span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1">Gender:<span class="float_right1"><input type="radio" style="margin-left: -45px;font-size:28px;" name="gender" value="Male" checked>Male<input type="radio" style="margin-left: 40px;font-size:28px;" name="gender" value="Female">Female</span></span></p>
                </div>                                                                                 
                <div class="form-group" style="height:55px;">
                    <p class="float_right"><span class="text_right1">Married:<span class="float_right1"><input type="radio" style="margin-left: -75px;font-size:28px;" name="married" value="Yes" checked>Yes<input type="radio" style="margin-left: 51px;font-size:28px;" name="married" value="No">No</span></span></p>
                </div>
                <div class="form-group" style="height:55px;">
<!--                <p class="float_right"><span class="text-right1">Kinderen:<input  type="text" placeholder="kinderen" name="children"></span></p><br>-->
                <p class="float_right"><span class="text_right1">Children:<span class="float_right1"><input type="radio" style="margin-left: -75px;font-size:28px;" name="children" value="Yes" checked>Yes<input type="radio" style="margin-left: 51px;font-size:28px;" name="children" value="No">No</span></span></p>
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
