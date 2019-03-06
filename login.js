/*
login.js
CIS 444 GROUP D
*/
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
	  if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
	if( $this.val() === '' ) {
	    label.removeClass('active highlight'); 
	    } else {
		    label.removeClass('highlight');   
		}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
	  label.removeClass('highlight'); 
	  } 
      else if( $this.val() !== '' ) {
	      label.addClass('highlight');
	  }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

var newpass1 = document.getElementById("newpass_id_1");
var newpass2 = document.getElementById("newpass_id_2");

function checkNewPassword(){
  if (newpass1.value != newpass2.value) 
    newpass2.setCustomValidity("Passwords don't match!");
  else 
    newpass2.setCustomValidity('');
}

newpass1.onchange = checkNewPassword;
newpass2.onkeyup = checkNewPassword;