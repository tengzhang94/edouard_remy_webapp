

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
    div.innerHTML = '<div class="form-group" style="height:55px;margin-top: 70px;"><label class="control-label col-sm-4" for="firstname" style=" font-family:  Lato, sans-serif; font-size: 20px;">Firstname:</label>\
                    <div class="col-sm-8">\
                    <input type="text" class="form-control" id="firstname" placeholder="first name " style="width:75%;margin-top: 5px;margin-left:3px;"name="firstName">\
                    </div>\
                </div>';
    list.appendChild(div);
}