<html>

    <head>
        <title>GraceAge 2.0 - Resident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/ResidentLoginPage.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <!-- 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script> 
        -->
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <div class="login-dark">
            <button class="btn btn-primary btn pull-right" type="submit">{goto_caregiver}</button>

            <form method="post" class="resident">
                     <video id="preview" style="height: 100%; width: 100%"></video>
            </form>
        </div>
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/qrLogin_test.js"></script>
    </body>
</html>

