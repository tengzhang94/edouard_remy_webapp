/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function selectAll(source) {
  checkboxes = document.getElementsByName('delete_list[]');
  for(var i=0, n=checkboxes.length; i<n; i++) {
    checkboxes[i].checked = source.checked;
   
  }
}




        
function searchResidents()
{
    var searchInput = document.getElementById('searchInput');
    
    console.log(searchInput.value);
    
     var residentsList = document.getElementById("residentsList");
    //Clear html before inserting new data
    while(residentsList.firstChild) {
        residentsList.removeChild(residentsList.firstChild);
    }
    
    jQuery.ajax({
        type: 'POST',
        url: base_url +"index.php/AjaxController/getResidents",
        data: {'inputName':searchInput.value},
        dataType: 'json',
        success: function(data){
            if(data)
            {
                for(i in data)
                {
                      var div = document.createElement('div');
                    
                      div.classList.add("line");
                       div.classList.add("col-md-12");
                    
                      div.innerHTML='<label>\n\
  <input type="checkbox" name="delete_list[]" />\n\
<span class="checkmark"></span>\n\
</label>\n\
<div class="resident">\n\
<span class="normalPxFont">'+data[i].firstName+' '+data[i].lastName+'</span>\n\
<span class="imgSpan"> <img src="'+base_url+'assets/css/image/happy.png" class="residentImg" />\n\
</span>\n\
</div>';
                    
                      residentsList.appendChild(div);
                      
                     
                }
              
            }
        },
        error:function(){
             console.log('error');
        }
        }); 
    
}


