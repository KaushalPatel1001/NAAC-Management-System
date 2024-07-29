(function($) {
  showSwal = function(type) {
    'use strict';
    if (type === 'basic') {
      swal({
        text: 'Any fool can use a computer',
        button: {
          text: "OK",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      })

    } else if (type === 'title-and-text') {
      swal({
        title: 'Read the alert!',
        text: 'Click OK to close this alert',
        button: {
          text: "OK",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      })

    } else if (type === 'success-message-menu') {
      swal({
        title: 'Well Done!',
        text: 'Menu Created Successfully',
        icon: 'success',
        button: {
          text: "Continue",
          value: true,
          visible: true,
          className: "btn btn-success"
        }
      })

    }else if (type === 'danger-message-menu') {
      swal({
        title: 'Warning!',
        text: 'Something Went Wrong While Adding Menu.',
        icon: 'warning',
        button: {
          text: "TRY AGAIN",
          value: true,
          visible: true,
          className: "btn btn-danger"
        }
      })

    }else if (type === 'danger-message-add-user') {
      swal({
        title: 'Warning!',
        text: 'Something Went Wrong While Adding User.',
        icon: 'warning',
        button: {
          text: "TRY AGAIN",
          value: true,
          visible: true,
          className: "btn btn-danger"
        }
      })

    } else if (type === 'success-message-register') {
      swal({
        title: 'Congratulations!',
        text: 'You Have Successfully Registered With Us. Please Click Continue to Login',
        icon: 'success',
        button: {
          text: "Continue",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      }).then(function() {
    window.location = "login.php";
});

    }
	else if (type === 'success-message-profile') {
      swal({
        title: 'Congratulations!',
        text: 'You have successfully updated the details.',
        icon: 'success',
        button: {
          text: "Continue",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      })

    }
	else if (type === 'danger-message-register') {
      swal({
        title: 'Warning!',
        text: 'Something Went Wrong While Registering You.',
        icon: 'warning',
        button: {
          text: "TRY AGAIN",
          value: true,
          visible: true,
          className: "btn btn-danger"
        }
      })

    }else if (type === 'danger-message-profile') {
      swal({
        title: 'Warning!',
        text: 'Something Went Wrong While Updating Details.',
        icon: 'warning',
        button: {
          text: "TRY AGAIN",
          value: true,
          visible: true,
          className: "btn btn-danger"
        }
      })

    }else if (type === 'already-message-register') {
      swal({
        title: 'Warning!',
        text: "You Can't Register More Than One Time With Same Credentials.",
        icon: 'warning',
        button: {
          text: "EXIT",
          value: true,
          visible: true,
          className: "btn btn-warning"
        }
      })

    }else if (type === 'auto-close') {
      swal({
        title: 'Auto close alert!',
        text: 'I will close in 2 seconds.',
        timer: 2000,
        button: false
      }).then(
        function() {},
        // handling the promise rejection
        function(dismiss) {
          if (dismiss === 'timer') {
            console.log('I was closed by the timer')
          }
        }
      )
    } else if (type === 'warning-message-and-cancel') {
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3f51b5',
        cancelButtonColor: '#ff4081',
        confirmButtonText: 'Great ',
        buttons: {
          cancel: {
            text: "Cancel",
            value: null,
            visible: true,
            className: "btn btn-danger",
            closeModal: true,
          },
          confirm: {
            text: "OK",
            value: true,
            visible: true,
            className: "btn btn-primary",
            closeModal: true
          }
        }
      })

    } else if (type === 'custom-html') {
      swal({
        content: {
          element: "input",
          attributes: {
            placeholder: "Type your password",
            type: "password",
            class: 'form-control'
          },
        },
        button: {
          text: "OK",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      })
    }
  }

})(jQuery);