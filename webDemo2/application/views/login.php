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
        <div id ="frm">
            <form action="process.php" method="POST">
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass"/>
                </p>   
                <p>
                    <input type="submit" id="btn" value="login"
                </p>  
                <p>
                    <input type="submit" id="btn2" value="Forget Password? Click here"
                </p>                  
            <form/>  
            </main>
              <footer>
        <p>Copyright © 2017 WebApps. Groep T All Rights Reserved.  
          <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
        </p>
      </footer>
    </body>
</html>
