<!DOCTYPE html>
 
<html>
    <head>
        <title>GraceAge 2.0 - Resident</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel ="stylesheet/less" type="text/css" href="<?php echo base_url();?>/assets/css/Resident.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>

    </head>

<body>
    <p class="text-right">{font_size}
        <button class="btn btn-primary" type="button" style="margin-left:10px;">{greater} </button>
        <button class="btn btn-primary" type="button">{smaller} </button>
    </p>
    <p class="text-center">{content} </p>
    <p class="text-center" style="margin-top:120px;">
        <?php echo form_open('ResidentController/Topics');?>
            <button class="btn btn-default" type="submit">{yes}</button>
        <?php echo form_close();
        echo form_open('CaregiverController/home');?>
            <button class="btn btn-default" type="submit">{no}</button>
        <?php echo form_close();?>
    </p>
</body>

</html>
