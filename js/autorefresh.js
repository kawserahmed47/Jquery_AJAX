$(document).ready(function () {
    $('#autosubmit').click(function () { 
        var  body = $('#body').val();
        if($.trim(body)!=''){
            $.ajax({
                method: "POST",
                url: "check/checkrefresh.php",
                data: {body:body},
                dataType: "text",
                success: function(result){
                    $("#autorefreshstatus").html(result);
                    $('#body').val("");
                   
                }
            });
         
            return false;
        }


        
    });
    setInterval(function(){
        $("#autorefreshstatus").load("check/getrefresh.php").fadeIn("slow");
    },1000);
});