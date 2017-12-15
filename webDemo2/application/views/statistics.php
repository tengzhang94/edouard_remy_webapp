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
            font-size: 30px;
        }

        #statsTopBar {
            padding-top:10px;
        }

        .topicQuestion {
            padding-left:5px;
            font-family:Lato,sans-serif;
            font-size:20px;
            padding-top:10px;
            width: 100%;
        }
        
        .questionLine {
            display: flex;
        }
        
        .topicQuestionAvg {
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
            width: 100%;
        }
        .topicAvg {
            padding-left:5px;
            padding-bottom: 0px;
            padding-top:20px;
            font-family:Lato,sans-serif;
            font-size:30px;
            border-bottom:1px solid #2c3d51;
            width: 15%;
            text-align: right;
        }
        .topicHeader{
            display: flex;
        }
        .statsHeader{
            padding-left:5px;
            padding-bottom: 0px;
            padding-top:20px;
            font-family:Lato,sans-serif;
            font-size:24px;
            color: #2c3d51;
        }
        #chartdiv {
            padding: 0px; 
            height: 250px; 
            background-color: #F5F5F5;
            width: 45%;
            position: fixed;
            margin-left: 46%;
        }
        #btnStats {
            border-bottom: 1px solid #2c3d51;
            /*border-left: 1px solid #2c3d51;
            border-top: 1px solid #2c3d51;
            border-right: 1px solid #2c3d51;*/
            width: 70px;
        }
        #btnStats:hover {
            background-color: #f5f5f5; 
        }

    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <span class="titleStats">{chooseSectors}:</span>

    <div class="form-group" >
        <div class="col-md-6 col-sm-10 col-xs-12" style="display:block">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{current_sector}
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>index.php/CaregiverController/statistics?sector=-1">{allSectors}</a></li>  
                    {sectors}
                    <li><a href="<?php echo base_url() ?>index.php/CaregiverController/statistics?sector={idSector}">{name}</a></li>  
                    {/sectors}
                </ul>
            </div>
        </div>
        <div class="col-md-6" style="height: 60px"></div>
    </div>
    <span class="statsHeader col-md-10  col-sm-10 col-xs-10" {notHidden}>{no_data_msg}</span>
    <span class="col-md-6 col-sm-10 col-xs-12" {hidden}>
        <span class="statsHeader col-md-10  col-sm-10 col-xs-10">{show_chart_header} </span><span class="statsHeader col-md-2  col-sm-2 col-xs-2">{average_header} </span>        
        {topics}
        <div class="col-md-12 topicHeader">
            <span class="topicTitle">{topicName}</span>
            <button id="btnStats"class="btn btn-default" onclick="drawChart({topicId})">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
                    <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
                        <path d="M857 953 c-4 -3 -7 -15 -7 -26 0 -19 -129 -211 -158 -234 -12 -10
                              -28 -5 -83 23 -38 19 -69 39 -69 44 0 15 -39 32 -60 25 -11 -4 -23 -16 -26
                              -28 -7 -26 -128 -121 -166 -131 -16 -3 -28 -11 -28 -17 0 -15 -111 -62 -145
                              -61 -47 2 -60 -12 -56 -60 2 -28 48 -34 74 -10 29 26 91 52 147 60 32 5 48 13
                              56 29 14 30 144 133 167 133 26 0 140 -60 155 -81 24 -35 82 -18 82 24 0 24
                              149 232 175 243 24 11 31 39 15 59 -13 15 -61 20 -73 8z"/>
                        <path d="M810 355 l0 -355 85 0 85 0 0 355 0 355 -85 0 -85 0 0 -355z m120 0
                              l0 -305 -35 0 -35 0 0 305 0 305 35 0 35 0 0 -305z"/>
                        <path d="M410 265 l0 -265 85 0 85 0 0 265 0 265 -85 0 -85 0 0 -265z m120 0
                              l0 -215 -35 0 -35 0 0 215 0 215 35 0 35 0 0 -215z"/>
                        <path d="M610 215 l0 -215 85 0 85 0 0 215 0 215 -85 0 -85 0 0 -215z m120 0
                              l0 -165 -35 0 -35 0 0 165 0 165 35 0 35 0 0 -165z"/>
                        <path d="M210 185 l0 -185 85 0 85 0 0 185 0 185 -85 0 -85 0 0 -185z m120 0
                              l0 -135 -35 0 -35 0 0 135 0 135 35 0 35 0 0 -135z"/>
                        <path d="M20 145 l0 -145 85 0 85 0 0 145 0 145 -85 0 -85 0 0 -145 m120 0
                              l0 -95 -35 0 -35 0 0 95 0 95 35 0 35 0 0 -95"/>
                    </g>
                </svg>
            </button>
            <span class="topicAvg ">{t_avg}</span>
        </div>        
        {questions}
        <div class="col-md-12 questionLine">
            <span class="topicQuestion">{questionString}</span><span class="topicQuestionAvg">{avg}</span>  
        </div>
        {/questions}
        {/topics}
    </span>
    <div class="col-md-6  col-sm-10 col-xs-12" id="chartdiv" {hidden}></div>

    <script type="text/javascript">

        // Load the Visualization API and the piechart package. 
        google.charts.load('current', {'packages': ['corechart']});

        // Set a callback to run when the Google Visualization API is loaded. 
        //google.charts.setOnLoadCallback(drawChart);

        function drawChart(topicId) {
            var options = {
                title: '{chart_title}',
                chartArea: {width: '50%', backgroundColor: '#F5F5F5'},
                isStacked: 'percent',
                hAxis: {
                    title: '{x_label}',
                    minValue: 0
                },
                /*vAxis: {
                 title: '{y_label}'
                 },*/
                series: {
                    0: {color: '#D61B1C'},
                    1: {color: '#ff8e26'},
                    2: {color: '#D9D684'},
                    3: {color: '#ADD8E9'},
                    4: {color: '#2C79B3'},
                    5: {color: '#5c5555'}
                    /*0: {color: '#c23b22'},
                     1: {color: '#c2721d'},
                     2: {color: '#888'},
                     3: {color: '#06c07a'},
                     4: {color: '#03c03c'}*/
                }
            };

            var jsonData = $.ajax({
                url: "<?php echo base_url() . 'index.php/CaregiverController/getChartStats?sector={current_sector_id}&topic=' ?>" + topicId,
                dataType: "json",
                async: false
            }).responseText;

            var parsed = JSON.parse(jsonData);
            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Question');
            data.addColumn('number', '{strongly_disagree}');
            data.addColumn('number', '{disagree}');
            data.addColumn('number', '{neutral}');
            data.addColumn('number', '{agree}');
            data.addColumn('number', '{strongly_agree}');
            data.addColumn('number', '{no_answer}');
            data.addRows(arr);
            //var data = new google.visualization.arrayToDataTable(jsonData);



            // Instantiate and draw our chart, passing in some options. 
            var chart = new google.visualization.BarChart(document.getElementById('chartdiv'));
            chart.draw(data, options);

        }

    </script> 
</body></html>
