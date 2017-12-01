

function getSectorInfo(idSector) {
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
            console.log(data);
            if(data){
                $.each(data, function(id, info){
                    var div = document.createElement('div');
                    div.innerHTML = info.firstName + " " + info.lastName;
                    list.appendChild(div);
                });
            }
        },   
        error: function(){
            var div = document.createElement('div');
                    div.innerHTML = "There are no residents in this group";
                    list.appendChild(div);
        }
    });
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