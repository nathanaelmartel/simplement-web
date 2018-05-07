/* 
 * http://api.jquery.com/load/
 * http://stackoverflow.com/questions/191881/serializing-to-json-in-jquery
 */
function init_form() {
  $('#devis input, #devis select').on("change",function () {
    $('#devis').load( 
    	$('#devis form').attr('action'),
    	$("#devis form").serializeArray(),
    	function () {init_form();}
    )
    return false;
  });
}


  $(document).ready(function () {
	  
	  /* références */
	  if ($('.reference-list').length) {
	      var $dylay = $('.reference-list').dylay('>li', 500);
	      $('.filter').click(function (event) {
	          event.preventDefault();
	          $('.filter').removeClass("active");
	          $dylay.filter($(this).data('filter'));
	          $(this).addClass("active");
	      });
	  }
      
      /* devis */
	  if ($('#devis input, #devis select').length) {
	      init_form();
	  }
  });
  
