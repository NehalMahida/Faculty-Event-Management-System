  
$('#hide') .click(function(){

	$('#content').hide('blind');
	$('#show').show();
	$('#hide').hide();

});
$('#show') .click(function(){

	$('#content').show('blind');
	$('#show').hide();
	$('#hide').show();

});