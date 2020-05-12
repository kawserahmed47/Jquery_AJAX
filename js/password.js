$(document).ready(function () {
    $('#showpassword').click(function () {
        var password = $('#password');
        var fieldtype = password.attr('type');
        if(fieldtype=='password'){
            password.attr('type', 'text');
            $(this).text("Hide Password");
        }else{
            password.attr('type','password');
            $(this).text("Show Password")

        }

       
        
    });
    
});