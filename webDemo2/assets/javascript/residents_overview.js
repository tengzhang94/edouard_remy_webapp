/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var flag=1;

function initialNoticationList()
{
     if(flag==1)
    {
           $("div[name='resident_element']").each(function() {
    $(this).css('display','none');
    
});


 flag=0;
    }
}


function selectResidents(idSector) {
    
    initialNoticationList();
    
    
    var id_checkbox='checkbox_'+idSector;
  checkbox = document.getElementById(id_checkbox);
 
  
    
    if(checkbox.checked)
    {
          console.log("598");
        
   
        
           
    //Clear html before inserting new data
  
     jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/getSectorInfo",
        data: {'idSector':idSector},
        dataType: 'json',
        success: function(data){   
            if(data){
               
                for(i in data) {
                    var elementID='resident_element_'+data[i].idResident;
                   
                    resident_element=document.getElementById(elementID);
                    
                  
                     $(resident_element).removeAttr("style");
                   
                     
                       
       
                          
                }
            }
                       
        },   
        error: function(){
          
        }
    });
   
      
    }
        else
    {
          console.log("598");
        
         jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/getSectorInfo",
        data: {'idSector':idSector},
        dataType: 'json',
        success: function(data){   
            if(data){
               
                for(i in data) {
                   var elementID='resident_element_'+data[i].idResident;
                   
                    resident_element=document.getElementById(elementID);
                    
                     $(resident_element).css('display','none');
                   
                     
                     
                   
                   
                         
                }
            }
                       
        },   
        error: function(){
          
        }
    });
     
    }
  
}


