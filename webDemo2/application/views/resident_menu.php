<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GraceAge 2.0 - Family</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/ResidentMenu.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p class="text-right"><span class="float_right">{Lettergrootte:}<button class="btn btn-primary" type="button" style="margin-left:10px;">{Groter} </button><button class="btn btn-primary" type="button">{Kleiner} </button></span></p>
                </div><span class="text-center">{Wat wil je nu doen? Kies een van de onderstaande opties.}</span>
                <form>
                    <button class="btn btn-default menuButton" type="button" onclick="location='message'">{Bekijk je foto's} - {Er zijn x foto's beschikbaar!}</button>
                </form>
                <form>
                    <button class="btn btn-default menuButton" type="button" onclick="location='topics'">{Beantwoordt meer vragen}</button>
                </form>
                <form>
                    <button class="btn btn-default menuButton" type="button" onclick="location='login'">{Afsluiten}</button>
                </form>
            </div>
        </div>
    </body>

</html>