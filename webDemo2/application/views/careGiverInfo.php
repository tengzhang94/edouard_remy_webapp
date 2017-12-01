
    
<!-- when parse part in controller is added, everything above this should be deleted -->
        
    <div class="row">
         <div class="col-1"></div>
         <div class="col-5">
            <button class="btn-photo" style="background-image: url({photo}); background-position: center; background-size: cover; font-size: 150%"></button>  
 <!--            <image src="http://www.kesato.com/blog/wp-content/uploads/2015/02/Google-Important-Ranking-Factor-2015.jpg" width="500" height="400">   
 -->       </div>
        
        <form class="form-horizontal" method="post" action="changePersonalInformation">
           
            <div class="col-6">
                
                
                <div class="form-group" style="height:75px; margin-top: 125px;">
                    <label class="control-label col-sm-4" for="firstname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Firstname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="firstname" placeholder="first name" value={firstName} style="width:75%;margin-top: 5px;margin-left:3px;" name="firstName">
                    </div>
                </div>
                <div class="form-group" style="height:75px;">
                    <label class="control-label col-sm-4" for="lastname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Lastname:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastname" placeholder="last name" value={lastName} style="width:75%;margin-top: 5px;margin-left:3px;" name="lastName">
                    </div>
                </div>
                <div class="form-group" style="height:75px;">
                    <label class="control-label col-sm-4" for="email" style=" font-family:  Lato, sans-serif; font-size: 20px;">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="email" value={email} style="width:75%;margin-top: 5px;margin-left:3px;" name="email">
                    </div>
                </div>
                <div class="form-group" style="height:75px;">
                <label class="control-label col-sm-4" for="language" style=" font-family:  Lato, sans-serif; font-size: 20px;">Language:</label>
                    <div class="col-sm-8">
                        <input type="radio" style="float: left; margin-left: 15px;margin-top: 15px;" name="language" value="1" {check_dutch}><p style="float:left;margin-top: 12px">Dutch</p><input type="radio" style="float:left;margin-left: 20px;margin-top: 15px;" name="language" value="0" {check_english}><p style="float:left;margin-top: 12px">English</p>
                    </div>
                </div>
                <div class="form-group" style="height:75px;">
                    <a class="btn btn-link"  role="button" href="<?php echo base_url();?>index.php/CaregiverController/getPersonalInformation" for="password" style=" height: 75px; margin-left: 20%; margin-top: -20px; font-family:  Lato, sans-serif; font-size:20px;">Change Password</a>
       
                </div>
             
            </div>
    
            <div class="col-3"></div>
            <div class="form-group" style="height:75px;">
                <div class="col-2">
                    <input type="submit" class="btn-confirm" name="submit1" value="Submit">
                </div>
                <div class="col-1"></div>
                <div class="col-2">
                    <input type="submit" class="btn-confirm" name="cancel1" value="Cancel">
                </div>
            </div>
            
        </form>        
    </div>
</body>

</html>
