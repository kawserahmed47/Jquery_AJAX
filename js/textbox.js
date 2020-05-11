$(document).ready(function(){
    $('#autotext').keyup(function () { 
        var autotext = $(this).val();
        if(autotext != ""){

      
        $.ajax({
            method: "POST",
            url: "check/checkautotext.php",
            data: {autotext:autotext},
            dataType: "text",
            success: function (response) {
                $('#texttatus').html(response);
                
            }
        });
    }
        
    });



})