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
  
  localStorage.setItem('lastActiveTab', target);

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

$(document).ready(function(){
	
    var lastActiveTab = localStorage.getItem('lastActiveTab');
	
    if(lastActiveTab == '#feed'){
		
        $('#lefttab').addClass('active');
		$('#righttab').removeClass('active');
		
		$('.tab-content > div').not('#feed').hide();
  
		$('#feed').fadeIn(600);
    }
	else if (lastActiveTab == '#settings'){
		
		$('.tab-content > div').not('#settings').hide();
		
		$('#righttab').addClass('active');
		$('#lefttab').removeClass('active');
		
		$('#settings').fadeIn(600);
	}
		
});

$('button.button-reset').on('click', function(event){
     $('label').removeClass('active');
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