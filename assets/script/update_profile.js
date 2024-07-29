$(document).ready(function() {
    $('#profile_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#full_name').val() == ""){
				showDangerToast_name();
				$('#full_name').focus();	
				}else{
							var request;
							request = $.ajax({
							url: "nifty.php?page=profile_update",
							type: "post",
							data: $("#profile_form").serialize(),
							success:function(data){ 
							if(data == 'ERROR'){
							showSwal('danger-message-profile');
							}else{
							showSwal('success-message-profile');
							}
                		} 
					 
        			});
				}
    		});
		});