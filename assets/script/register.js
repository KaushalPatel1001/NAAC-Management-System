$(document).ready(function() {
    $("#submitButton").click(function() {
function isEmail(emailV){
    if(emailV != null && emailV != undefined){
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailV);    
    }
    else{
        return false;
    }

}
		if($('#full_name').val() == ""){
				showDangerToast_name();
				$('#full_name').focus();	
				} 
			else if(!isEmail($('#email').val())){
				showDangerToast_email();
				$('#email').val("");
				$('#email').focus();	
				}
			else if($('#mobile').val() == ""){
				showDangerToast_mobile();
				$('#mobile').val("");
				$('#mobile').focus();	
				}
			else if($('#password').val() == ""){
				showDangerToast_password();
				$('#password').focus();
				}
			else if($('#agreement').prop("checked") == false){
					alert("Please Accept The Term & Condition");
				$('#agreement').focus();	
				}else{
        var request;
        request = $.ajax({
            url: "register_process.php",
            type: "post",
            data: $("#registrationForm").serialize(),
			success:function(data){  
			if(data == 'ERROR'){
					showSwal('danger-message-register');
				}else if(data == 'EXISTS'){
					showSwal('already-message-register');
					$("#registrationForm").trigger("reset");
				}else{
					$("#exampleModal-2").modal("show");
					}
						  
                     } 
					 
        });
			}
    });
});