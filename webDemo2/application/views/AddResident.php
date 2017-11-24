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
                <div class="form-group" style="height:auto;">
                    <input class="form-control" type="text" name="firstName" placeholder="firstName" style="font-family:Lato, sans-serif;font-size:18px;">
<!--                <p class="float_right"><span class="text-right1">Naam: <input type="text" placeholder="naam" name="firstName"></span></p><br>-->
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Achternaam: <input type="text" placeholder="naam" name="lastName"></span></p><br>-->
                <input class="form-control" type="text" name="lastName" placeholder="lastName" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Geboortedatum:<input type="text" placeholder="dd/mm/jj" name="birthDate"></span> </p><br>-->
                <input class="form-control" type="text" name="birthDate" placeholder="birthDate" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Geslacht: <input type="text" placeholder="geslacht" name="gender"></span></p><br>-->
                <input class="form-control" type="text" name="gender" placeholder="gender" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Gehuwd:<input  type="text" placeholder="gehuwd" name="married"></span></p><br>-->
                <input class="form-control" type="text" name="married" placeholder="married" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Kinderen:<input  type="text" placeholder="kinderen" name="children"></span></p><br>-->
                <input class="form-control" type="text" name="children" placeholder="children" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                <div class="form-group" style="height:auto;">
<!--                <p class="float_right"><span class="text-right1">Anderen: <input  type="text" placeholder="anderen" name="other"></span></p><br>-->
                <input class="form-control" type="text" name="other" placeholder="other" style="font-family:Lato, sans-serif;font-size:18px;">
                </div>
                
                <p class="text">{success}</p>
                
                <div class="form-group" style="height:auto;">
                    <button class="btn-confirm" type="submit">Submit</button>
              
                  
                  <button class="btn-confirm" type="button" >Cancel</button> 
                </div>

            </div>
        </form>        
    </div>
</body>

</html>
