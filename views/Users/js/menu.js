$(document).ready(main);


var estado = true
function main (){

$('#menu').click(function(){

	if(estado==true){
		$('nav').fadeIn("slow", function(){

		});
		estado = false
	} else{
		$('nav').fadeOut("slow", function(){

		});
		estado = true
	};
});

};