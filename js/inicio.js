JQuery(document).on('submit','#formlg', function(event)){
	event.preventDefault();

	JQuery.ajax({
		url:'app/login.php',
		type:'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('botonlg').val('validando...');
		}
	})
	.done(function(respuesta)){
		console.log(respuesta);
		if(|respuesta.error){
			if(respuesta.nivel=='LaboratorioAdmin'){
				location.href = 'app/Admin/';
			}else if(respuesta.nivel=='Laboratorio'){
				location.href='app/Laboratorio/';
			}
		}else{
			$('error').slideUp('slow');
			setTimeout(function()){
				$('error').slideUp('slow');
			},3000);
			$('botonlg').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
});