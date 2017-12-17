<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GraceAge 2.0 - Family</title>
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/sendMessage.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <script src="<?php echo base_url(); ?>assets/javascript/jquery.min.js"></script>
                 <script src="<?php echo base_url(); ?>assets/javascript/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
              
                
                </head>

                <body>
                    <script> var base_url = "<?= base_url('') ?>";</script>
                    <p class="text-right" id="header"><span class="float_left">GraceAge 2.0 - &lt;?php echo $title; ?&gt; </span></p>
                    <div>
                        <div id="container">
                            <div id="row">
                                <div class="col-md-6 leftCol">
                                    <div class="col-md-3"><img src="<?php echo base_url(); ?>assets\css\image\giani.jpg" id="imgPerson" /></div>
                                    <div class="col-md-9 personInfo"><span class="normalPxFont personInfoLine">{welcome} {name}!</span>
                                        <button class="imgBtn" type="button">{changeImage}</button>
                                    </div><span class="col-md-12 normalPxFont">{selectReceivers}</span>
                                    <div class="col-md-12 buttonBar">
                                        <label >
                <input type="checkbox" name="deleteAll" onclick="selectAll(this)">
                <span class="checkmark"></span>
            </label>
                                       
                                        <button id="searchButton" class="searchButton" type="button" onclick="searchResidents()">
                                            <svg class="filterSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 100 100">
                                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                                    <path d="M363 939 c-145 -18 -262 -137 -282 -284 -22 -159 53 -296 198 -364 
                                                          47 -22 70 -26 141 -26 73 0 93 4 140 27 l55 28 130 -130 131 -130 32 
                                                          33 32 33 -129 128 -129 129 29 45 c76 120 57 297 -44 409 -71 78 -186 
                                                          117 -304 102z m173 -74 c180 -80 227 -307 95 -458 -40 -45 -121 -86 -187 
                                                          -93 -164 -20 -319 122 -317 290 1 139 101 259 236 285 56 11 111 3 173 -24z"
                                                          />
                                                </g>
                                            </svg>
                                        </button>
                                        <input id="searchInput" type="text" class="searchBox" placeholder="{FirstName or LastName}" />
                                    </div>
                                    <div id="residentsList" class="pre-scrollable col-md-12">
                                        {residents}
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" name="delete_list[]" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{firstName} {lastName}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        {/residents}                                   
                                    </div>
                                </div>
                                <div class="col-md-6" id="rightcol"><span id="addImageHere" class="normalPxFont col-md-12">{makeMessage}</span>
                                    <button class="imgBtn" type="button">{addImage}</button><span id="imageSpan" class="col-md-12"><img src="IMG_8938.jpg" class="imgPlaceHolder" /></span><span id="maxCharSpan">{maxChar}</span>
                                    <textarea id="textArea" class="col-md-12" maxlength="250" placeholder="{messagePlaceholder}"></textarea>
                                    <button class= "imgBtn" type="button">{sendMessage}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                      <script type="text/javascript" src="<?PHP echo base_url();?>assets/javascript/caregiver_message.js"></script>
                </body>
    <script>
            $(function() {
                 $("#searchInput").on( "keydown", function(event) {
            if(event.which === 13) 
            {
                $("#searchButton").click();
            }
        });
                
            });
            
    </script>
   

                </html>