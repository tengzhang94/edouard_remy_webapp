<!DOCTYPE html>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    <div class="dashboardTop">
        <button id="dashIcon" class="btn btn-default dashboardButton" type="button">
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
        <button id="dashIcon"  class="btn btn-default removeButton" type="submit" form="deleteForm">
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
    </div>
    
    <form action="deleteMessages" method="post" id="deleteForm">
    {messages}
    <div class="line">
        <label>
            <input type="checkbox" name="delete_list[]" value='{messageId}'>
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



