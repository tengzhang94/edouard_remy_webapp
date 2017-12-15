 

function getSectorInfo(idSector, nameSector) {
    var list = document.getElementById('residentList');
    //Clear html before inserting new data
    while(list.firstChild) {
        list.removeChild(list.firstChild);
    }
    
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/getSectorInfo",
        data: {'idSector': idSector},
        dataType: 'json',
        success: function(data){   
            if(data){
                var title = document.createElement('span');
                title.classList.add("sectorTitle");
                title.innerHTML = 'Dit zijn de mensen van afdeling "' + nameSector + '":';
                list.appendChild(title);
                for(i in data) {
                        var div = document.createElement('div');
                        div.classList.add("sectorPerson");
                        div.innerHTML = data[i].firstName + " " + data[i].lastName;
                        list.appendChild(div);
                }
            }
            var input = document.createElement('div');
            input.classList.add("sectorAddPerson");
            input.innerHTML = '<div class="sectorAddPerson btn btn-default" onclick="makeInput(' + idSector + ', \'' + nameSector + '\')">Click to add resident to this sector</div>';
            list.appendChild(input);
            
        },   
        error: function(){
            var div = document.createElement('div');
            div.innerHTML = "There are no residents in this group"
            list.appendChild(div);
            var input = document.createElement('div');
            input.classList.add("sectorAddPerson");
            input.innerHTML = '<div class="sectorAddPerson btn btn-default" onclick="makeInput(' + idSector + ', \'' + nameSector + '\')">Click to add resident to this sector</div>';
            list.appendChild(input);
        }
    });
}

function makeInput(idSector, nameSector){
    var list = document.getElementById('residentList');
    //Clear lastchild and insert form
    list.removeChild(list.lastChild);
    var div = document.createElement('div');
    div.classList.add("sectorPerson");
    div.innerHTML = '<form class="form-horizontal" onsubmit="addResident(' + idSector + ', \'' + nameSector + '\')">\
                        <input type="submit" style="display: none" />\
                        <div class="control-group">\
                            <div class="controls form-inline">\
                                <input type="text" class="input-small" placeholder="First Name" id="firstName" autofocus>\
                                <input type="text" class="input-small" placeholder="Last Name" id="lastName">\
                            </div>\
                        </div>\
                    </form>';
    list.appendChild(div);
}

function addResident(idSector, nameSector) {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/addResident",
        data: {'idSector': idSector, 'firstName': firstName, 'lastName': lastName},
        dataType: 'json'
    });
    setTimeout(getSectorInfo(idSector, nameSector), 100);
}

function createSectorForm() {
    var list = document.getElementById('residentList');
    //Clear html before inserting new html
    while(list.firstChild) {
        list.removeChild(list.firstChild);
    }
    
    var div = document.createElement('div');
    div.innerHTML = '<form class="form-horizontal" method="post" action="addSector">\
                        <div class="form-group" style="height:55px;margin-top: 70px;"><label class="control-label col-sm-4" for="Sector name" style=" font-family:  Lato, sans-serif; font-size: 20px;">New sector\'s name:</label>\
                            <div class="col-sm-8">\
                                <input type="text" class="form-control" id="sectorName" placeholder="Name " style="width:75%;margin-top: 5px;margin-left:3px;"name="sectorName">\
                            </div>\
                        </div>\
                        <div class="form-group" style="height:55px;">\
                            <div class="col-8">\
                                <button class="btn-confirm" type="submit">Create</button>\
                            </div>\
                        </div>\
                    </form>';
    list.appendChild(div);
}

function removeSector(idSector) {    
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/removeSector",
        data: {'idSector': idSector},
        success: function(data){
            location.reload();
        },   
        error: function(){
            location.reload();
        }
    });
}

function makeSectorInput() {
    var list = document.getElementById('sectors');
    //Clear lastchild and insert form
    list.removeChild(document.getElementById('addSectorBtn'));
    var div = document.createElement('div');
    div.classList.add("newSector");
    div.innerHTML = '<div class="line">\
                        <form class="form-horizontal sectorButton" method="post" action="addSector">\
                        <input type="submit" style="display: none"/>\
                            <div class="control-group">\
                                <div class="controls form-inline">\
                                    <input type="text" class="sectorInput" placeholder="Sector name" id="sectorName" name="sectorName" autofocus>\
                                </div>\
                            </div>\
                    </form>\
                    <button class="btn btn-default deleteSectorButton" type="button">\
            <svg class="deleteSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 100 100" style="display: none">\
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#2c3d51" stroke="none">\
            <path d="M366 978 c-9 -12 -16 -33 -16 -45 0 -22 -3 -23 -99 -23 -74 0 -102\
                  -4 -111 -15 -14 -17 -5 -35 18 -35 16 0 21 -43 54 -412 35 -389 38 -414 58\
                  -430 20 -16 46 -18 227 -18 198 0 205 1 226 23 21 21 24 46 55 412 19 215 36\
                  398 39 408 2 9 11 17 19 17 20 0 30 30 13 41 -8 5 -58 9 -111 9 l-98 0 0 28\
                  c0 52 -24 62 -148 62 -103 0 -112 -2 -126 -22z m397 -165 c-3 -27 -19 -208\
                  -36 -403 l-32 -355 -197 -3 -197 -2 -5 32 c-7 42 -66 714 -66 751 l0 27 269 0\
                  268 0 -4 -47z"/>\
            <path d="M355 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20\
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>\
            <path d="M475 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20\
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>\
            <path d="M595 798 c-3 -7 -4 -166 -3 -353 3 -332 3 -340 23 -340 20 0 20 7 20\
                  350 0 325 -1 350 -18 353 -9 2 -19 -3 -22 -10z"/>\
            </g>\
            </svg>\
            </button>\
                    </div>';
    list.appendChild(div);
}