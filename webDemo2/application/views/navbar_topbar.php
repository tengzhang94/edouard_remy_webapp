<!--<div>
    <p class="text-right" id="header"><span class="float_left">GraceAge 2.0 - <?php echo $title; ?></span></p>                
    <div class="navbar navbar-fixed-left">  
        <ul class="nav navbar-nav">
            {menu}
            <li class="{className}"><a href="{link}"> <img src="<?php echo base_url() ?>assets/css/image/{img}"/> <span>{name}</span></a></li>
            {/menu}
        </ul>
    </div>
</div>-->


<!DOCTYPE html>
<html>

    <head>
        <title>GraceAge 2.0 - Caregiver</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <p class="text-right" id="header"><span class="float_left">GraceAge 2.0 - <?php echo $title; ?> </span></p>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-md-offset-0">
                        {menu}
                        <li class="item {className}">
                            <a href="{link}"> 
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 100 100">
                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                <path d="{img}"/>
                                </g>
                                </svg>
                                <span class="category">{name}</span>
                            </a>
                        </li>
                        {/menu} 
                    </div>
                    <div class="col-md-11">{content}</div>
                </div>
            </div>
        </div>
    </body>
</html>