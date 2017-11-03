<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type = "text/css">
    </head>
    <body>
        <main>
        <div id ="form">
            <form action="process.php" method="POST">
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>GRACE AGE<span> Caregiver</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Login">
                                <input type="button" value="Forget Password? Click here!">
		</div>
                <div class="jump">
                    <input type="button" value="Not caregiver? Click here!">
                </div>
            </form>
        </div>
        </main>
    </body>
</html>
