<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GraceAge 2.0 - Family</title>
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/sendMessage.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
                </head>

                <body>
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
                                        <button class="dashboardButton" type="button">
                                            <svg class="selectAllSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 100 100">
                                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                                                    <path d="M180 920 c-19 -5 -49 -24 -66 -43 -43 -46 -46 -80 -42 -417 3 -313 6
                                                          -323 85 -361 39 -19 57 -20 355 -17 436 4 402 -30 406 406 5 463 29 436 -403
                                                          439 -165 1 -316 -2 -335 -7z m630 -58 c59 -29 60 -35 58 -369 l-3 -303 -28
                                                          -27 -27 -28 -303 -3 c-334 -2 -340 -1 -369 58 -16 31 -18 68 -18 313 0 221 3
                                                          285 15 313 25 60 44 63 360 64 247 0 284 -2 315 -18z"/>
                                                    <path d="M583 536 l-131 -155 -33 36 c-19 19 -56 53 -82 75 -46 39 -49 40 -63
                                                          22 -13 -18 -7 -26 83 -111 54 -51 100 -93 103 -92 3 0 70 77 149 171 112 133
                                                          142 175 134 187 -5 8 -14 16 -19 18 -6 2 -69 -66 -141 -151z"/>
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="searchButton" type="button">
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
                                        <input type="text" class="searchBox" placeholder="{FirstName or LastName}" />
                                    </div>
                                    <div class="pre-scrollable col-md-12">
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
                                        <div class="line col-md-12">
                                            <label>
                                                <input type="checkbox" /><span class="checkmark"></span></label>
                                            <div class="resident"><span class="normalPxFont">{resident name}</span><span class="imgSpan"> <img src="<?php echo base_url(); ?>assets\css\image\happy.png" class="residentImg" /></span></div>
                                        </div>
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
                </body>

                </html>