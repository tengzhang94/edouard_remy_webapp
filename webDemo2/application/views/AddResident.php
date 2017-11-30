<!DOCTYPE html>
 <!--
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
    -->
    
    <div class="row">
         <div class="col-1"></div>
        <div class="col-6" >
      
        <button class="btn-photo">Photo upload</button>   
        </div>
        
        <form class="form-horizontal" method="post" action="addResident">
           
            <div class="col-5">
                <div class="form-group" style="height:55px;margin-top: 70px;">
                    <label class="control-label col-sm-4" for="firstname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Firstname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="firstname" placeholder="first name " style="width:75%;margin-top: 5px;margin-left:3px;"name="firstName">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="lastname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Lastname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastname" placeholder="last name " style="width:75%;margin-top: 5px;margin-left:3px;" name="lastName">
                    </div>
                </div>
                <div class="form-group" style="height:55;">
                    <label class="control-label col-sm-4" for="birthdate" style=" font-family:  Lato, sans-serif; font-size: 20px;">Birthdate:</label>
                    <div class="col-sm-8">
                    <input type="date" class="form-control" id="birthdate" placeholder="dd-mm-jj" style="width:75%;margin-top: 5px;margin-left:3px;" name="birthDate">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="gender" style=" font-family:  Lato, sans-serif; font-size: 20px;">Gender:</label>
                    <div class="col-sm-8">
                        <input type="radio" style="float: left; margin-left: 15px;margin-top: 15px;" name="gender" value="Male" checked><p style="float:left;margin-top: 12px">Male</p><input type="radio" style="float:left;margin-left: 12px;margin-top: 15px;" name="gender" value="Female"><p style="float:left;margin-top: 12px">Female</p>
                    </div>   
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="married" style=" font-family:  Lato, sans-serif; font-size: 20px;">Married:</label>
                    <div class="col-sm-8">
                        <input type="radio" style="float: left; margin-left: 15px;margin-top: 15px;" name="married" value="1" checked><p style="float:left;margin-top: 12px">Yes</p><input type="radio" style="float:left;margin-left: 20px;margin-top: 15px;" name="married" value="0"><p style="float:left;margin-top: 12px">No</p>
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="children" style=" font-family:  Lato, sans-serif; font-size: 20px;">Children:</label>
                    <div class="col-sm-8">
                    <input type="radio" style="float: left; margin-left: 15px;margin-top: 15px;" name="children" value="1" checked><p style="float:left;margin-top: 12px">Yes</p><input type="radio" style="float:left;margin-left: 20px;margin-top: 15px;" name="children" value="0"><p style="float:left;margin-top: 12px">No</p>
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="others" style=" font-family:  Lato, sans-serif; font-size:20px;">Others:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="others" placeholder="others "style="width:75%;margin-top: 5px;padding-left:3px;" name="others">
                    </div>
                </div>
                
            </div>
            <div class="col-3"></div>
            <div class="form-group" style="height:55px;">
                <div class="col-2">
                    <button class="btn-confirm" type="submit">Submit</button>
                </div>
                <div class="col-1"></div>
                <div class="col-2">
                <button class="btn-confirm" type="button">Cancel</button>
                </div>
            </div>
            
        </form>        
    
</body>

</html>
