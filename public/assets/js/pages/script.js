
$("#ref").change(function(e){
 
    
    var ref = $(this).val();
    
   
 
    $.ajax({
       type:'POST',
       url:'{{ route("ajax.source") }}',
       data:{ref:ref},
       success:function(data){
            if($.isEmptyObject(data.error)){
                alert(data.success);
               
            }else{
                alert(data.error);
            }
       }
    });

});

