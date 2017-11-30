<!DOCTYPE html>
 
<html>
    <head>
        <title>GraceAge 2.0 - addResident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url();?>assets/css/Caregiver.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

<body>
    
<!-- when parse part in controller is added, everything above this should be deleted -->
        
    <div class="row">
         <div class="col-1"></div>
         <div class="col-6" id="careGiverPic">
             <image src="source.php?id=1" width="300" height="200">   
        </div>
        
        <form class="form-horizontal" method="post" action="addResident">
           
            <div class="col-5">
                <div class="form-group" style="height:55px;margin-top: 70px;">
                    <label class="control-label col-sm-4" for="id" style=" font-family:  Lato, sans-serif; font-size: 20px;">ID:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="id" placeholder="id" value={idcaregiver} style="width:75%;margin-top: 5px;margin-left:3px;"name="idCaregiver">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="firstname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Firstname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="firstname" placeholder="first name" value={firstName} style="width:75%;margin-top: 5px;margin-left:3px;" name="firstName">
                    </div>
                </div>
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="lastname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Lastname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastname" placeholder="last name" value={lastName} style="width:75%;margin-top: 5px;margin-left:3px;" name="lastName">
                    </div>
                </div>
                <div class="form-group" style="height:55;">
                    <label class="control-label col-sm-4" for="email" style=" font-family:  Lato, sans-serif; font-size: 20px;">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="email" value={email} style="width:75%;margin-top: 5px;margin-left:3px;" name="email">
                    </div>
                </div>
                
                <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="password" style=" font-family:  Lato, sans-serif; font-size:20px;">Password:</label>
                    <div class="col-sm-8">
                        <p type="text" class="form-control" style="width:75%;margin-top: 5px;padding-left:3px;">{password}</p>
                    </div>
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
