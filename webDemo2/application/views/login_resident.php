<html>

    <head>
        <title>GraceAge 2.0 - Resident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/css/ResidentLoginPage.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <div class="login-dark">
            <button class="btn btn-primary btn pull-right" type="submit">{goto_caregiver}</button>

            <form method="post" class="resident">
                    <!--
                  <div class="sidebar">
                    <section class="scans">
                      <h2>Scans</h2>
                      <ul v-if="scans.length === 0">
                        <li class="empty">{result}</li>
                      </ul>
                      <transition-group name="scans" tag="ul">
                        <li v-for="scan in scans" :key="scan.date" :title="scan.content"> </li>
                      </transition-group>
                    </section>
                  </div>
                    -->
                     <video id="preview" style="height: 100%; width: 100%"></video>
                <script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/qrLogin_test.js"></script>
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

