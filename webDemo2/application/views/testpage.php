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
                    {content}
                    <form method="post" action="changePersonalInformation">
                    <div class="form-group" style="height:55px;">
<!--                <p class="float_right"><span class="text-right1">Kinderen:<input  type="text" placeholder="kinderen" name="children"></span></p><br>-->
                <p class="float_right"><span class="text_right1">Language:<span class="float_right1"><input type="radio" style="margin-left: -75px;font-size:28px;" name="language" value="1" checked>Dutch<input type="radio" style="margin-left: 51px;font-size:28px;" name="language" value="0">English</span></span></p>
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
