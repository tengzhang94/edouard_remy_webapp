<head>
    <style>
        span.multiselect-native-select {
            position: relative
        }
        span.multiselect-native-select select {
            border: 0!important;
            clip: rect(0 0 0 0)!important;
            height: 1px!important;
            margin: -1px -1px -1px -3px!important;
            overflow: hidden!important;
            padding: 0!important;
            position: absolute!important;
            width: 1px!important;
            left: 50%;
            top: 30px
        }
        .multiselect-container {
            position: absolute;
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            border-radius: 0px;
        }
        .multiselect-container .input-group {
            margin: 5px
        }
        .multiselect-container>li {
            padding: 0
        }
        .multiselect-container>li>a.multiselect-all label {
            font-weight: 700
        }
        .multiselect-container>li.multiselect-group label {
            margin: 0;
            padding: 3px 20px 3px 20px;
            height: 100%;
            font-weight: 700
        }
        .multiselect-container>li.multiselect-group-clickable label {
            cursor: pointer
        }
        .multiselect-container>li>a {
            padding: 0
        }
        .multiselect-container>li>a>label {
            margin: 0;
            height: 100%;
            cursor: pointer;
            font-weight: 400;
            padding: 3px 0 3px 10px
        }
        .multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
            margin: 0
        }
        .multiselect-container>li>a>label>input[type=checkbox] {
            margin-bottom: 5px
        }
        .btn-group>.btn-group:nth-child(2)>.multiselect.btn {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .btn {
            width:100%;
            background-color: #f5f5f5;
            border-radius: 0px;
            font-family: Lato, sans-serif;
            font-size: 24px;
            color: #2c3d51;
            border-color: #2c3d51;
            margin-top: 10px;
        }
        
        .btn:hover {             
            background-color: #2c3d51;            
            color: #f5f5f5;
            border-color: #2c3d51;            
        }        
        
        .open>.dropdown-toggle.btn-primary:hover{
            background-color: #2c3d51;            
            color: #f5f5f5;
            border-color: #2c3d51; 
        }
        
        .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
            background-color: #2c3d51;            
            color: #f5f5f5;
            border-color: #2c3d51; 
        }

        .open>.dropdown-menu {
            width: 100%;
            display: block;
            font-size: 18px;
        }

        #statsTopBar {
            padding-top:10px;
        }

        .topicQuestion {
            padding-left:5px;
            font-family:Lato,sans-serif;
            font-size:20px;
            padding-top:10px;
        }

        .statsGraph {
            height:200px;
        }

        .topic {
            border:1px solid #2c3d51;
            height:200px;
            margin-top:15px;
        }
        span.titleStats {
            padding-left: 14px;
            font-size: 24px;
            font-family: Lato, sans-serif;
            color: #2c3d51;
        }
        .topicTitle {
            padding-left:5px;
            padding-bottom: 0px;
            padding-top:20px;
            font-family:Lato,sans-serif;
            font-size:30px;
            border-bottom:1px solid #2c3d51;
        }
        #chartdiv {
            padding: 0px; height: 250px; background-color: #F5F5F5;
        }

    </style>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/javascript/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/javascript/amChart.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/javascript/amChart.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/javascript/amChart.js"></script>

</head>

<body>
    <span class="titleStats">{chooseSectors}:</span>

    <div class="form-group" >
        <div class="col-md-6 col-sm-10 col-xs-12" style="display:block">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{current_sector}
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>index.php/CaregiverController/statistics?id=-1">{allSectors}</a></li>  
                    {sectors}
                    <li><a href="<?php echo base_url() ?>index.php/CaregiverController/statistics?id={idSector}">{name}</a></li>  
                    {/sectors}
                </ul>
            </div>
        </div>
        <div class="col-md-6" style="height: 60px"></div>
    </div>
    {no_data_msg}
    <span class="col-md-6 col-sm-10 col-xs-12" {hidden}>        
        {topics}
        <span class="topicTitle col-md-10  col-sm-10 col-xs-10">{topicName} </span><span class="topicTitle col-md-2  col-sm-2 col-xs-2">{t_avg} </span>
        {questions}
        <span class="topicQuestion col-md-10  col-sm-10 col-xs-10">{questionString}</span><span class="topicQuestion col-md-2 col-sm-2 col-xs-2">{avg} </span>  
        {/questions}
        {/topics}
    </span>
    <div class="col-md-6  col-sm-10 col-xs-12" id="chartdiv" {hidden}></div>
</body></html>