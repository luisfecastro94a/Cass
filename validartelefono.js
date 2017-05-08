function validar(){
	
	//Almacenamos los valores
	fono=$('#fono').val();
	
   //Comprobamos la longitud de caracteres
	if (fono.length<9){
		return true;
	}
	else {
		alert('Maximo 8 caracteres');
		return false;
		
		}

}
   