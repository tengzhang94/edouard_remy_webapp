<html>

    <head>
        <title>GraceAge 2.0 - Caregiver</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/residents_overview.less" />
        <!--    <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/Caregiver.less"/>  -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/javascript/bootstrap.min.js" ></script>
            <!--
            <script src="<?php echo base_url(); ?>assets/javascript/bs-animation.js"></script>
            -->
            <script src="<?php echo base_url(); ?>assets/javascript/jquery.min.js"></script>
    </head>


    <body>
        <p class="text-right" id="header"><span class="float_left">GraceAge 2.0 - <?php echo $title; ?> </span></p>
        <div>
            <div class="container" style="height: 100%">
                <div class="row" style="height: 100%">
                    <div class="col-lg-1 col-lg-push-0  col-md-1 col-md-push-0 col-md-offset-0 col-sm-2  col-sm-push-0 col-xs-6 col-xs-push-3">
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
                    <div class="col-md-11" style="padding-left:0px;height:100%;padding-right:0px;">
                        <div class="row" style="height:10%; display: flex; flex-direction: row; padding-top: 10px">
                          
                                <input type="text" style="height:46px;width:25%;font-size:44px; margin-left: 50%" />
                           
                           
                                 <button id='Button_search' class="btn btn-default" type="button" style="height:46px; width: 46px;  background-color: #ffffff; margin-left: 5%"  >
                                            <svg class="filterSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
                                                    <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                                            <path d="M57 953 c-4 -3 -7 -21 -7 -39 0 -37 27 -71 213 -267 l107 -114 0
                                                                -180 0 -180 112 -67 c61 -37 117 -65 125 -62 10 4 13 54 13 248 l1 243 160
                                                                    169 c158 167 160 169 157 210 l-3 41 -436 3 c-239 1 -439 -1 -442 -5z m831
                                                            -48 c-2 -8 -70 -86 -153 -175 l-150 -160 -90 1 -90 0 -150 161 c-82 88 -151
                                                                            167 -153 174 -3 12 60 14 393 14 343 0 396 -2 393 -15z m-318 -585 c0 -110 -3
                                                                    -200 -6 -200 -3 0 -37 19 -75 41 l-69 41 0 159 0 159 75 0 75 0 0 -200z"/>
                                                            </g>
                                                            </svg>
                                        </button> 
                            
                         
                                      <button id="Button_filter" class="btn btn-default" type="button" style="height:46px; width: 46px;  background-color: transparent; margin-left: 5%; border-color: transparent">
                                            <svg class="filterSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
                                                    <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                                            <path d="M57 953 c-4 -3 -7 -21 -7 -39 0 -37 27 -71 213 -267 l107 -114 0
                                                                -180 0 -180 112 -67 c61 -37 117 -65 125 -62 10 4 13 54 13 248 l1 243 160
                                                                    169 c158 167 160 169 157 210 l-3 41 -436 3 c-239 1 -439 -1 -442 -5z m831
                                                            -48 c-2 -8 -70 -86 -153 -175 l-150 -160 -90 1 -90 0 -150 161 c-82 88 -151
                                                                            167 -153 174 -3 12 60 14 393 14 343 0 396 -2 393 -15z m-318 -585 c0 -110 -3
                                                                    -200 -6 -200 -3 0 -37 19 -75 41 l-69 41 0 159 0 159 75 0 75 0 0 -200z"/>
                                                            </g>
                                                            </svg>
                                        </button> 
                            
                           
                                <form method="post" action="addResident" style="margin-left: 5%">
                                       
                                        <button id="Button_add" class="btn btn-default" type="submit" style="height:46px; width: 46px; background-color: transparent;">
                                            <svg class="filterSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
                                                    <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                                            <path d="M57 953 c-4 -3 -7 -21 -7 -39 0 -37 27 -71 213 -267 l107 -114 0
                                                                -180 0 -180 112 -67 c61 -37 117 -65 125 -62 10 4 13 54 13 248 l1 243 160
                                                                    169 c158 167 160 169 157 210 l-3 41 -436 3 c-239 1 -439 -1 -442 -5z m831
                                                            -48 c-2 -8 -70 -86 -153 -175 l-150 -160 -90 1 -90 0 -150 161 c-82 88 -151
                                                                            167 -153 174 -3 12 60 14 393 14 343 0 396 -2 393 -15z m-318 -585 c0 -110 -3
                                                                    -200 -6 -200 -3 0 -37 19 -75 41 l-69 41 0 159 0 159 75 0 75 0 0 -200z"/>
                                                            </g>
                                                            </svg>
                                        </button> 
                                    </form>
                            
                            
                                  
                               
                                   
                                    
                                  
                           

                                   
                               
                           
                           
                                       
                                   
                               
                            
                        </div>
                        <div class="row" style="height:90%;">
                            {residents}
                            <form method="post" action="residentIndividual">
                                <div class="col-md-12" style="width:33%;height:33%;padding-right:0px;padding-left:0px;">
                                    <input type="hidden" name="resident_id" value="{idResident}">                                      
                                            <button class="btn btn-default" type="submit" style="width:288px;height:180px;background-color:#ffffff;background-image:url(&quot;none&quot;);"> 
                             
                                                <img src="<?php echo base_url(); ?>assets/css/image/icons8-customer-50.png" style="width:216px;height:140px;" /> 
                                                <span> <img src="<?php echo base_url(); ?>assets/css/image/icons8-happy-100.png" style="width:70px;height:70px; margin-bottom:70px;" /> </span>
                                                <img src="<?php echo base_url(); ?>assets/css/image/icons8-time-100.png" style="height:70px;width:70px;margin-top:70px;margin-left:-70px;"/>
                                                <small style="height:40px;width:143px;">{firstName} {lastName}</small>
                                                <small style="height:40px;width:143px; margin-top:-40px;margin-left:143px;" name="resident_name">room {Sectors_idSector}.{roomNr}</small>
                                            </button>
                                            </div>
                                            </form>
                                            <!--               <div class="col-md-11" style="padding-right:0;padding-left:0;width:16%;height:33%; margin-left: 4%">
                                                               <div style="width:100%;height:100%; padding-right: 5%">                              
                                                                   <div class="row" style="height:60%;margin-top:17px;">                              
                                                                       <div class="col-md-12" style="width:60%;height:103px;padding:0px;margin-left:10%;">
                                                                           <button class="btn btn-default" type="button" style="width:100%;height:100%;">
                                                                               <img src="<?php echo base_url(); ?>assets/css/image/icons8-customer-50.png" style="width:100%;height:100%;" />
                                                                           </button>
                                                                           </div>
                                                                       <div class="col-md-12" style="width:30%;height:103px;padding:0px;">
                                                                           <div class="row" style="height:51.5px;">
                                                                               <div class="col-md-12" style="height:100%;width:100%;padding:0px;"><img src="<?php echo base_url(); ?>assets/css/image/icons8-happy-100.png" style="width:51.5px;height:100%;" /></div>
                                                                           </div>
                                                                           <div class="row" style="height:51.5px;">
                                                                               <div class="col-md-12" style="padding:0px;height:100%;"><img src="<?php echo base_url(); ?>assets/css/image/icons8-time-100.png" style="height:100%;width:51.5px;" /></div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="row" style="height:30%;">
                                                                       <div class="col-md-12" style="width:60%;padding:0px;margin:0px;margin-left:10%;height:100%;"><span style="width:100%;height:100%;font-size:14px;margin-right:0px;margin-left:10%;">{firstName} {lastName}</span></div>
                                                                       <div class="col-md-12" style="width:30%;padding:0px;height:100%;"><span style="width:100%;height:100%;font-size:14px;">room {Sectors_idSector}.{roomNr}</span></div>
                                                                   </div>
                                                               </div>
                                                           </div>   
                                         
                                            
                                            -->
                                            {/residents}
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </body>
                                            </html>
