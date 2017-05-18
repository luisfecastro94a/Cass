$ (function(){

	//lista de clientes
	$.post('clienlista.php').done( function( respuesta )
	{
		$('#nombreCliente').html(respuesta);
	});

	//lista de 	Encargados de los clientes
	$('#nombreCliente').change(function()
{
	var el_cliente = $(this).val();
	//lista de clientes encargados
	$.post('clienlistaencargado.php',{nombreCliente: el_cliente}).done( function( respuesta )
	{
		$('#nombreE').html(respuesta);
	});


});
	

	//lista de encargados
	$('#nombreE').change( function()
	{
		var encargado  = $(this).children('option:selected').html();
		alert ('El encargado elegido es ' + encargado);
	});


	
})