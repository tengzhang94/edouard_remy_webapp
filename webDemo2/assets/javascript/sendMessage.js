  function readURL(input)
  {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
 }
 
 
 function sendMessage()
 {
     var file=document.getElementById("file").files[0];
     
         
     textarea=document.getElementById("textArea");
     a=document.getElementById("imgPerson");
     var text=textarea.value;
     var senderId=a.name;
     var i=0;
     var residents=[];
      $("input[name='delete_list[]']").each(function() {
          var id= $(this).attr('id');
           
           
           checkbox1 = document.getElementById(id);
           
        if(checkbox1.checked)
        {
              residents[i]=id;
              
              i++;
          
        }
        
      });
      
      console.log(residents[1]);
      console.log(senderId);
      console.log(text);
    
          
      jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/AjaxController/sendMessage",
        data: {'receiverIds':residents,
                'senderId':senderId,
                'text':text,},
        contentType:false,
        cache:false,
        processData:false,
        success: function(data){   
             
            if(data){
           
                
                
               
                for(i in data) {
                    
              
                }
            }
                       
        },   
        error: function(){
          console.log('error');
        }
    }); 
     
 }
        
     


