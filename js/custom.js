jQuery(document).ready(function($) {
	$('#msg').fadeOut(10000);
	$('#error').fadeOut(10000);
	$('#anunciospromo').tinycarousel( { controls: false, interval: true, intervaltime: 5000, axis: 'y' } );
	
});

function toggleDiv(element){
	if(document.getElementById(element).style.display = 'none') {
		document.getElementById(element).style.display = 'block';
	} else if(document.getElementById(element).style.display = 'block') {
		document.getElementById(element).style.display = 'none';
	}
}