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
        datatype: 'json',
        success: function(data){
            console.log(data);
            $.each(data.results, function(index, row){
                var div = document.createElement('div');
                div.innerHTML = row.firstName;
                list.appendChild(div);
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error: ' + textStatus + ", " + errorThrown);
        }        
    });
}

function test() {
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/test",
        data: {'idSector': idSector},
        dataType: 'json',
        success: function(data){
            console.log(data);
            $.each(data.data, function(index, row){
                var div = document.createElement('div');
                div.innerHTML = row.firstName;
                list.appendChild(div);
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error: ' + textStatus + ", " + errorThrown);
        }        
    });
}