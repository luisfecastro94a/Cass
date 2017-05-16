/*function buscar(){
	var opcion = document.getElementById('nombre').value;
	window.location.href = 'http://localhost:8080/sistemacass/ot.php?opcion='+opcion;
}
*/

function escola(id){
	$.post("client.php",{id_cliente:id}, function(retorno){
		da = retorno.split("/");
		$('#nombre').val(da[1]);
		$('#rut').val(da[2]);
		$('#fono').val(da[3]);
		$('#correo').val(da[4]);
		$('#direccion').val(da[5]);
		$('#nombrec').val(da[6]);

	});

}