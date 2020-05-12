$(document).ready(function(){
    $('#autosearch').keyup(function () { 
        var autosearch = $(this).val();
        if(autosearch != ""){

      
        $.ajax({
            method: "POST",
            url: "check/checksearch.php",
            data: {autosearch:autosearch},
            dataType: "text",
            success: function (response) {
                $('#livestatus').html(response);
                
            }
        });
    }
        
    });



})