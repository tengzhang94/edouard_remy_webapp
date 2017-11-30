

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