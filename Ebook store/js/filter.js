function selectLanguage(){
    var x=document.getElementById("language").value;
    $.ajax({
       url:"../php/language_filter.php",
       method:"POST" ,
       data:{
           id :x
       },
       success:function(data){

        $("#filter").html;

        
       }

    
    })
}