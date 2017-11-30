<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>GraceAge2.0 CAREGIVER</title>
        <link rel="stylesheet" type ="text/css" href="style.css">
        
    </head>
    <body>
        <header>
        <div id="logo">
          <h1>GraceAge2.0 CAREGIVER</h1>
        </div>
        </header>
            <main>
                <section>
                  

                
                    <form method="post" action="changePersonalInformation">
                        
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
                        
                        <div class="form-group" style="height:55px;">
                    <label class="control-label col-sm-4" for="password" style=" font-family:  Lato, sans-serif; font-size:20px;">Password:</label>
                    <div class="col-sm-8">
                        <p type="text" class="form-control" style="width:75%;margin-top: 5px;padding-left:3px;">{password}</p>
                    </div>
                </div>
                        
                        
                    <div class="form-group" style="height:55px;">
<!--                <p class="float_right"><span class="text-right1">Kinderen:<input  type="text" placeholder="kinderen" name="children"></span></p><br>-->
                <p class="float_right">
                    <span class="text_right1">Language:
                        <span class="float_right1"><input type="radio" style="margin-left: 75px;font-size:28px;" name="language" value="1" {check_dutch}>Dutch<input type="radio" style="margin-left: 51px;font-size:28px;" name="language" value="0" {check_english}>English</span>
                    </span>
                </p>
                </div>
                        
                        <div class="form-group" style="height:55;">
                    <label class="control-label col-sm-4" for="email" style=" font-family:  Lato, sans-serif; font-size: 20px;">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="email" value={email} style="width:75%;margin-top: 5px;margin-left:3px;" name="email">
                    </div>
                </div>
                    
                    <input type="submit" value="submit" name="submit" />
                    </form>
                </section>
            </main>
              <footer>
        <p>Copyright © 2017 WebApps. Groep T All Rights Reserved.  
          <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
        </p>
      </footer>
    </body>
</html>
