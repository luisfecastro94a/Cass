/*function buscar(){
	var opcion = document.getElementById('nombre').value;
	window.location.href = 'http://localhost:8080/sistemacass/ot.php?opcion='+opcion;
}
*/

function escola(id){
	$.post("client.php",{id_cliente:id}, function(retorno){
		da = retorno.split("/");
		$('#rut').val(da[1]);
		$('#fono').val(da[2]);
		$('#correo').val(da[3]);
		$('#direccion').val(da[4]);
		$('#nombrec').val(da[5]);
		

	});

}