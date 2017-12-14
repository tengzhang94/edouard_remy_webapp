<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GraceAge 2.0 - Family</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/ResidentMessage.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <div class="content row ">
            <div class="content col-md-12">
                <div class="row content">
                    <div class="col-md-12 content" id="messageCol">
                        <div class="content col-md-12">
                            <p class="text-right">
                                <span class="float_left">
                                    <button class="returnBtn btn btn-primary" type="button" >{< Keer terug naar het menu} </button>
                                </span>
                                <span class="float_right">{Lettergrootte:}
                                    <button class="btn btn-primary" type="button" style="margin-left:10px;">{Groter} </button>
                                    <button class="btn btn-primary" type="button">{Kleiner} </button>
                                </span>
                            </p>
                        </div><span class="col-md-2"><img src="<?php echo base_url(); ?>assets\css\image\giani.jpg" class="personImg" /></span><span id="personsays" class="messageText col-md-10">{person} {zegt}: </span><span id="message" class="messageText col-md-10 col-md-offset-2">{message}&quot;Hallo! Wij zijn net terug uit Italië, waar we deze familiefoto hebben getrokken. Morgen komen we met z&#39;n allen langs om je verjaardag te vieren. Tot morgen!&quot;</span>
                        <span
                            id="date" class="messageText col-md-10">Ontvangen op: zaterdag 9 december 2017</span>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 buttonLeftCol">
                        <button class="btn btn-default" type="button"> <span class="buttonSpan">{Vorige}</span><span class="buttonSpan">{Foto}</span><img src="<?php echo base_url(); ?>assets\css\image\icons8-left-100.png" class="icon" /></button>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 imgCol"><img src="<?php echo base_url(); ?>assets\css\image\IMG_8938.jpg" /></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 buttonRightCol">
                        <button class="btn btn-default" type="button"><span class="buttonSpan">{Volgende} </span><span class="buttonSpan">{Foto} </span><img src="<?php echo base_url(); ?>assets\css\image\icons8-right-100.png" class="icon" /></button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>