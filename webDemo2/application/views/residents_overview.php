
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>frame</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url();?>assets/css/overview.css" />
     <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
     <script src="<?php echo base_url();?>assets/javascript/bootstrap.min.js" ></script>
     <!--
     <script src="<?php echo base_url();?>assets/javascript/bs-animation.js"></script>
     -->
      <script src="<?php echo base_url();?>assets/javascript/jquery.min.js"></script>
</head>

<body>
    
       <p class="text-right" id="header" style="padding-top:0px;padding-right:0px;"><span class="float_left">GraceAge 2.0 - <?php echo $title; ?> </span></p>
    <div>
        <div class="container" style="height:100%;">
            <div class="row" style="height:100%;">
                <div class="col-md-1 col-md-offset-0" style="width:8.3%;height:100%;">
                    <li class="item active">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Homepage</span></a>
                    </li>
                    <li class="item inactive">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Resident</span></a>
                    </li>
                    <li class="item inactive">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Statistics</span></a>
                    </li>
                    <li class="item inactive">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Message</span></a>
                    </li>
                    <li class="item inactive">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Settings</span></a>
                    </li>
                    <li class="item inactive">
                        <a href="{link}">
                            <svg width="50%" height="50%"></svg><span class="category">Logout</span></a>
                    </li>
                </div>  
                <div class="col-md-11" style="padding-left:0px;height:100%;padding-right:0px;">
                    <div class="row" style="height:10%;">
                        
                        <div class="col-md-12" style="width:50%;padding:0px;margin-left: 50%;">
                            <div class="row">
                                <div class="col-md-12" style="width:50%;padding:0px;margin-left:10%;height:46px;">
                                    <input type="text" style="margin:0px;margin-left:0px;height:100%;width:100%;padding:0px;font-size:44px;" />
                                </div>
                                <div class="col-md-12" style="width:10%;padding:0px;margin-left:0px;height:46px;">
                                    <button class="btn btn-default" type="submit" style="background-image:url(&quot;<?php echo base_url();?>assets/css/image/icons8-search-100.png&quot;);height:100%;background-position:center;background-size:cover;border-color:transparent;"></button>
                                </div>
                                <div class="col-md-12" style="width:10%;padding:0px;margin-left:5%;height:46px;">
                                    <button class="btn btn-default" type="submit" style="background-image:url(<?php echo base_url();?>assets/css/image/icons8-filter-filled-100.png);height:100%;background-position:center;background-size:cover;border-color:transparent;"></button>
                                </div>
                                <div class="col-md-12" style="width:10%;padding:0px;margin-left:5%;height:46px;">
                                    <button class="btn btn-default" type="submit" style="background-image:url(&quot;<?php echo base_url();?>assets/css/image/icons8-plus-math-100.png&quot;);height:100%;background-position:center;background-size:cover;border-color:transparent;"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height:90%;">
                        {residents}
                        <div class="col-md-11" style="padding-right:0;padding-left:0;width:33%;height:33%;">
                            <div style="width:100%;height:100%;">
                                <div class="row" style="height:60%;margin-top:17px;">
                                    <div class="col-md-12" style="width:60%;height:103px;padding:0px;margin-left:10%;"><img src="<?php echo base_url();?>assets/css/image/icons8-customer-50.png" style="width:100%;height:100%;" /></div>
                                    <div class="col-md-12" style="width:30%;height:103px;padding:0px;">
                                        <div class="row" style="height:51.5px;">
                                            <div class="col-md-12" style="height:100%;width:100%;padding:0px;"><img src="<?php echo base_url();?>assets/css/image/icons8-happy-100.png" style="width:100%;height:100%;" /></div>
                                        </div>
                                        <div class="row" style="height:51.5px;">
                                            <div class="col-md-12" style="padding:0px;height:100%;"><img src="<?php echo base_url();?>assets/css/image/icons8-time-100.png" style="height:100%;width:100%;" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="height:30%;">
                                    <div class="col-md-12" style="width:45%;padding:0px;margin:0px;margin-left:10%;height:100%;"><span style="width:100%;height:100%;font-size:18px;margin-right:0px;margin-left:30%;">{firstName} {lastName}</span></div>
                                    <div class="col-md-12" style="width:45%;padding:0px;height:100%;"><span style="width:100%;height:100%;font-size:18px;margin-left:30%;">room {Sectors_idSector}.{roomNr}</span></div>
                                </div>
                            </div>
                        </div>
                        {/residents}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>