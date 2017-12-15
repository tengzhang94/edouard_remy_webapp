function confirmAndDelete() {
    if(isChecked()) {
        if(confirm("Are you sure you want to delete the selected messages?")) {
        document.getElementById("deleteForm").submit();
        }
    }
}

function gotoIndividualResident(id) {
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/CaregiverController/residentIndividual",
        data: {'resident_id': id},
        dataType: 'json'
    });
    window.location=base_url + "index.php/CaregiverController/residentIndividual";
}

function showFilterList(id)
{
    var residentFilterList='residents_'+id;
    var e= document.getElementById(residentFilterList);
    if(e.style.display=='block')
    {
        e.style.display='none';
    }
    else
    {
        e.style.display='block';
    }
}

function filter(source)
{
    
    if(source.checked)
    {
      $(source).attr('checked','yes');
   
        
    }
    else
    {
         $(source).removeAttr('checked');
   
    }
    selectNotification();
}

function selectResidents(source,idSector) {
    
   
 
  
    var name_checkboxes='resident_check_'+idSector;
  checkboxes = document.getElementsByName(name_checkboxes);

  for(var i=0, n=checkboxes.length; i<n; i++) {
        
    checkboxes[i].checked = source.checked;
    
    if(checkboxes[i].checked)
    {
        $(checkboxes[i]).attr('checked','yes');
      
        
    }
    else
    {
         $(checkboxes[i]).removeAttr('checked');
    }
    
    
 
  }
  selectNotification();
}



function selectNotification()
{
    var i=0;
    var j=0;
    var typeList=[];
    var idList=[];
     
        $("input[id='filterCheckbox']").each(function() {
          if($(this).attr("checked")=='checked')
          {
             
              if($(this).attr('value')=="LowScore")
              {
                  
                  
                  typeList[i]=$(this).attr("value");
                  i++;
              }
              else
              {
                   if($(this).attr('value')=="activity")
              {
                  
                  typeList[i]=$(this).attr("value");
                  i++;
              }
              else
              {
                  idList[j]=$(this).attr("value");
                  j++;
              }
              }
              
              
             
          }
          else
          {
             
          }
        
           
              
});
i=0;
j=0;
var m=typeList.length;
var o=idList.length;
if(m==0)
{
     $("input[id='filterCheckbox']").each(function(){
         if($(this).attr('value')=="LowScore"||$(this).attr('value')=="activity")
         {
              typeList[i]=$(this).attr("value");
                  i++;
         }
         
                    
     });
}

if(o==0)
{
     $("input[id='filterCheckbox']").each(function(){
          if($(this).attr('value')!="LowScore"&&$(this).attr('value')!="activity")
         {
              idList[j]=$(this).attr("value");
                  j++;
         }
     });
}
i=0;
j=0;
if(o==0&&m==0)
{
    $("input[id='filterCheckbox']").each(function(){
         if($(this).attr('value')=="LowScore"||$(this).attr('value')=="activity")
         {
              typeList[i]=$(this).attr("value");
                  i++;
         }
         else
         {
              idList[j]=$(this).attr("value");
                  j++;
         }
         
                    
     });
}


  

  
   var notificationList = document.getElementById('allNotification');
    //Clear html before inserting new data
    while(notificationList.firstChild) {
        notificationList.removeChild(notificationList.firstChild);
    }



 
 jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/getSectorInfo1",
        data: {'typeList':typeList,
                'idList':idList},
        dataType: 'json',
        success: function(data){   
             
            if(data){
           
                
                
               
                for(i in data) {
                    
                     var inputId='check_'+data[i].idNotification;
                    
                     var div = document.createElement('div');
                    div.classList.add("line");
                    
                    var input=document.createElement('input');
                    input.type="checkbox";
                    input.name="delete_list[]";
                    input.id=inputId;
                    input.value=data[i].idNotification;
                    
                    var span=document.createElement('span');
                    span.classList.add("checkmark");
                    
                    var label=document.createElement('label')
                    
                    label.appendChild(input);
                     label.appendChild(span);
                     
                     var content=document.createElement('div');
                     content.classList.add("message");
                       content.innerHTML = data[i].messageText;
                     
                     div.appendChild(label);
                     div.appendChild(content);
                    
                    
                    notificationList.appendChild(div);
                    
                   
                   
               
                   
                     
                       
            
                }
            }
                       
        },   
        error: function(){
          console.log('error');
        }
    });  


    
   
}




function selectAll(source) {
  checkboxes = document.getElementsByName('delete_list[]');
  for(var i=0, n=checkboxes.length; i<n; i++) {
    checkboxes[i].checked = source.checked;
   
  }
}

function isChecked() {
  checkboxes = document.getElementsByName('delete_list[]');
  $checked = false;
  for(var i=0; i<checkboxes.length; i++) {
    if(checkboxes[i].checked === true) {
        $checked = true;
        break;
    }
  }
  return $checked;
}