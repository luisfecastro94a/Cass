function objetoAjax(){
 var xmlhttp=false;
 try {
 xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
 try {
 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 } catch (E) {
 xmlhttp = false;
 }
 }
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
   xmlhttp = new XMLHttpRequest();
   }
   return xmlhttp;
}
function eliminarDato(id_cliente){
   //donde se mostrará el resultado de la eliminacion
   divResultado = document.getElementById('resultado');
   
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("¿De verdad desea eliminar este Cliente?")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id del empleado
   ajax.open("GET", "cliente.borrar.php?id_cliente="+id_cliente);
   ajax.onreadystatechange=function() {
   if (ajax.readyState==4) {
   //mostrar resultados en esta capa
   divResultado.innerHTML = ajax.responseText
   }
   }
   //como hacemos uso del metodo GET
   //colocamos null
   ajax.send(null)
   }
}