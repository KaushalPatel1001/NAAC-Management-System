$(document).ready(function() {
    $("#verify_otp").click(function() {
		if($('#otp').val() == ""){
				showDangerToast_otp();
				}else{
        var request;
        request = $.ajax({
            url: "verify_otp.php",
            type: "post",
            data: $("#otp_form").serialize(),
			success:function(data){  
			if (data == 'ERROR') //status is proper of the json object, which we gave in php code in above script
        {
			showDangerToast_otp();
        }
        else 
        {
			showSwal('success-message-register'); 
			$("#exampleModal-2").modal("hide");
			$("#registrationForm").trigger("reset");
        }
} 
					 
        });
			}
    });
});