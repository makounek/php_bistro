
    	

$(document).ready(function() { 

  $(".slider").slider({ full_width: true });  

  $('.modal').modal();
}); 


function toggleModal(heading, description){

	$('#info-modal-heading').text(heading);

	$('#info-modal-content').text(description);

	var instance = M.Modal.getInstance($('#modal3'));

	instance.open();

}