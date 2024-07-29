(function($) {
  showSuccessToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
  };
  showInfoToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Info',
      text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
      showHideTransition: 'slide',
      icon: 'info',
      loaderBg: '#46c35f',
      position: 'top-right'
    })
  };
  showWarningToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Warning',
      text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#57c7d4',
      position: 'top-right'
    })
  };
  showDangerToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Danger',
      text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_name = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Full Name Is Required',
      text: 'Please Enter Your Full Name',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_field_required = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Required Field',
      text: 'This Field is Mandatory',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
    showDangerToast_user = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Username is mandatory',
      text: 'Please enter Username',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_otp = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'OTP Is Required',
      text: 'Please Enter Valid OTP',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_email = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Email Is Required',
      text: 'Please Enter Valid Email.',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_mobile = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Mobile Number Is Required',
      text: 'Please Enter Your Mobile Number',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_password = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Password Is Required',
      text: 'Please Enter Your Password',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_wrong_password = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Wrong Credentials',
      text: 'Enter Correct Username Or Password',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showDangerToast_login_success = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Logged In',
      text: 'Welcome Back',
      showHideTransition: 'slide',
	  icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
  };

  showToastPosition = function(position) {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Positioning',
      text: 'Specify the custom position object or use one of the predefined ones',
      position: String(position),
      icon: 'info',
      stack: false,
      loaderBg: '#f96868'
    })
  }
  showToastInCustomPosition = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Custom positioning',
      text: 'Specify the custom position object or use one of the predefined ones',
      icon: 'info',
      position: {
        left: 120,
        top: 120
      },
      stack: false,
      loaderBg: '#f96868'
    })
  }
  resetToastPosition = function() {
    $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
    $(".jq-toast-wrap").css({
      "top": "",
      "left": "",
      "bottom": "",
      "right": ""
    }); //to remove previous position style
  }
})(jQuery);