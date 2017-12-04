<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">   <!--<!--
</head> -->
    <div class="row">
         <div class="col-sm-5 col-sm-offset-1 col-xs-12">
            <button class="btn-photo" style="background-image: url({photo}); background-position: center; background-size: cover; font-size: 150%"></button>  
 <!--            <image src="http://www.kesato.com/blog/wp-content/uploads/2015/02/Google-Important-Ranking-Factor-2015.jpg" width="500" height="400">   
 -->       </div>
        
        <form class="form-horizontal" method="post" action="changePersonalInformation">
           
            <div class="col-sm-6 col-xs-12">
                
                {content}
                <div class="form-group" style=" margin-top: 125px;">
                    <label class="control-label col-sm-4 col-xs-12" for="firstname"><p class="residentInfoStyle">Firstname:</p></label>
                    <div class="col-sm-8 col-xs-12">
                    <input type="text" class="form-control" id="firstname" placeholder="first name" value="{firstName}" name="firstName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lastname"><p class="residentInfoStyle">Lastname:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastname" placeholder="last name" value="{lastName}"name="lastName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email"><p class="residentInfoStyle">Email:</p></label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="email" value="{email}"name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="language"><p class="residentInfoStyle">Language:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline" style="margin-top: 5px;">
                        <input type="radio" name="language" value="1" {check_dutch}>Dutch
                        </div>
                        <div class="radio-inline" style="margin-top: 5px;">
                        <input type="radio" name="language" value="0" {check_english}>English
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-0 col-xs-12">
                    <input type="submit" class="btn-confirm" name="submit1" value="Submit">
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 col-xs-12">   
                    <input type="submit" class="btn-confirm" name="cancel1" value="Cancel">
                    </div>
                </div>
                </div>
            </div>
     </form>  
      
         <form method="post" action="changePassword">
            <div class="col-3" >
                <div class="form-group" style="height:75px;width:800px;">
                 <div class="form-group" style="height:75px;margin-top: 3%; width:100%;margin-left: 20%">
                    <a class="a globalLoginBtn" style="height:50%;width:100%; font-size:150%;text-align: center;" >Change Password</a>
                    <div class="modal fade" id="loginModal" style="display:none;">
                            <div class="modal-dialog modal-sm" style="width:540px;">
                                    <div class="modal-content" style="border:none;">		
                                            <div class="modal-header">
                                                    <button type="button" id="login_close" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="loginModalLabel" style="font-size: 18px; color:#2c3d51">Change Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                    <section class="box-login v5-input-txt" id="box-login">
                                                            
                                                                <ul>
                                                                     <li class="form-group" style="margin-left: 4%; margin-right: 4%" ><input class="form-control" id="id_password_3" name="password_old" placeholder="Old Password" type="password"></li>
                                                                        <li class="form-group" style="margin-left: 4%; margin-right: 4%"><input class="form-control" id="id_password_l" maxlength="50" name="password_new" placeholder="New Password" type="password"></li>
                                                                        <li class="form-group" style="margin-left: 4%; margin-right: 4%" ><input class="form-control" id="id_password_2" name="password_confirm" placeholder="Confirm Password" type="password"></li>
                                                                </ul>
                                                            
                                                                <div class="login-box marginB10">
                                                                    <button class="btn-confirm"id="login_btn"  name="submit3" type="submit" class="btn btn-micv5 btn-block globalLogin" style="width:92%">Submit</button>
                                                                        <div id="login-form-tips" class="tips-error bg-danger" style="display: none;">Alert</div>
                                                                </div>
                                                           
                                                    </section>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class="col-1"></div>
                
            </div>
                
                
            </div>
            </form>
            
          
    </div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery2.2.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>
</body>

</html>