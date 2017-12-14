<!DOCTYPE html>
<div class="col-md-12">
    <div class="dashboardTop">
        <div class="line">
        <label>
            <input type="checkbox" name="deleteAll" onclick="selectAll(this)">
            <span class="checkmark"></span>
        </label>

            <span id="dashIconBar">
                <button  id="dashIcon"  class="btn btn-default filterButton" type="button">
            <svg class="filterSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 100 100">
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
                <button id="dashIcon"  class="btn btn-default removeButton" onclick ="confirmAndDelete()"><!--type="submit" form="deleteForm"-->
            <svg class="removeSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" viewBox="0 0 100 100">
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">
            <path d="M366 978 c-9 -12 -16 -33 -16 -45 0 -22 -3 -23 -99 -23 -74 0 -102
                  -4 -111 -15 -14 -17 -5 -35 18 -35 16 0 21 -43 54 -412 35 -389 38 -414 58
                  -430 20 -16 46 -18 227 -18 198 0 205 1 226 23 21 21 24 46 55 412 19 215 36
                  398 39 408 2 9 11 17 19 17 20 0 30 30 13 41 -8 5 -58 9 -111 9 l-98 0 0 28
                  c0 52 -24 62 -148 62 -103 0 -112 -2 -126 -22z m397 -165 c-3 -27 -19 -208
                  -36 -403 l-32 -355 -197 -3 -197 -2 -5 32 c-7 42 -66 714 -66 751 l0 27 269 0
                  268 0 -4 -47z"/>
            <path d="M355 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>
            <path d="M475 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>
            <path d="M595 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>
            </g>
            </svg>            
        </button>
            </span>
        </div>
    </div>
    
    <form action="deleteNotifications" method="post" id="deleteForm">
    {messages}
    <div class="line">
        <label>
            <input type="checkbox" name="delete_list[]" id="check_{messageId}" value='{messageId}'>
            <span class="checkmark"></span>
        </label>
        <div class="message">{messageText}</div>
    </div>
    {/messages}
    </form>
    
    <div class="row statsDash">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="colLeftDash"><span class="dashTitle">{avgActivity}</span><span class="dashTitle"><img src="http://a17-webapps04.studev.groept.be/assets/css/image/redClock.png" /></span><span class="dashTitle">&gt; 2 weeks</span></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="dashTitle">{avgScore}</span><span class="dashTitle"><small id="scoreDash">3 </small><img src="http://a17-webapps04.studev.groept.be/assets/css/image/blueArrow.png" id="arrowDash" /></span></div>
</div>
    
</div>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/javascript/dashboard.js"></script>