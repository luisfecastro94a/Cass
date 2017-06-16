$(function(){

	//lista de equipos
	$.post('proveedorLista.php').done( function(respuesta)
	{
		$('#razonSocial').html(respuesta);
	})

});