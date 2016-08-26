	$(function () {
		  var $win = $(window);
		  // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento
		  var $pos = 145;
		  $win.scroll(function () {
		     if ($win.scrollTop() <= $pos){
		    	$('nav').removeClass('min');
		    	$('.logotipo').removeClass('logo');
		   		
		   	}	
		     else {
		       $('.logotipo').addClass('logo');
		       $('nav').addClass('min');
		     }
		   });
	});
