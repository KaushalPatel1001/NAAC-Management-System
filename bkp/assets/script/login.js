$(document).ready(function() {
    $('#login_form').on('submit', function(e) {
				e.preventDefault();	
		if($('#username').val() == ""){
				showDangerToast_user();
				} 
			else if($('#password').val() == ""){
				showDangerToast_password();
				}else{
        var request;
        request = $.ajax({
            url: "login_process.php",
            type: "post",
            data: $("#login_form").serialize(),
					success:function(data){  
					if (data == 'ERROR') //status is proper of the json object, which we gave in php code in above script
						{
							showDangerToast_wrong_password();
						}else{
							showDangerToast_login_success();
							window.location='dashboard.php?msg=success';
						}
					} 
							 
        		});
			}
    	});
	});