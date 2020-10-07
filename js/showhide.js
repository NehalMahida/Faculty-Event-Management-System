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
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='sport']:checked"), function(){
                favorite.push($(this).val());
            });
            alert("My favourite sports are: " + favorite.join(", "));
        });
   