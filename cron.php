<?php 
$conectar=new mysqli("localhost","root","","bdcass");
/*verificar la conexion*/
if ($conectar->connect_errno) {
	printf("Error al conectar: %s\n", $conectar->connect_errno);
	exit();
}

$fecha = date('d/m/Y');

/*insertar registro a la tabla equipo*/
if($fecha == '02/06/2017'){
	$conectar->query("INSERT INTO equipo (serie_equipo, fecha_creacion, sintoma_cliente)VALUES ('fjkd2334','$fecha','equipo no prende')");
}
/*hay que llamar al archivo cron del bloc de notas, desde el programa descargado, "System Scheduder"*/
?>