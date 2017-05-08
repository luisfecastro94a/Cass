<?php
include("conexion.php");
	  	
   




if
	(isset($_POST['id_ciudad']) && !empty($_POST['id_ciudad']) &&
     isset($_POST['nombre']) && !empty($_POST['nombre']) &&
     isset($_POST['rut']) && !empty($_POST['rut']) &&
     isset($_POST['fono']) && !empty($_POST['fono']) &&
     isset($_POST['correo']) && !empty($_POST['correo']) &&
     isset($_POST['giro']) && !empty($_POST['giro']) &&
     isset($_POST['direccion']) && !empty($_POST['direccion']) &&
     isset($_POST['nombre_contacto']) && !empty($_POST['nombre_contacto']) &&
     isset($_POST['fono_contacto']) && !empty($_POST['fono_contacto']) &&
     isset($_POST['correo_contacto']) && !empty($_POST['correo_contacto']) &&
     isset($_POST['cargo_contacto']) && !empty($_POST['cargo_contacto']) &&
     isset($_POST['condicion_pago']) && !empty($_POST['condicion_pago']))
  {

  	  $Ciudad = $_POST['id_ciudad']; 
 	  $Nombre = $_POST['nombre'];
      $Rut = $_POST['rut'];
      $Fono = $_POST['fono'];
      $Correo = $_POST['correo'];
      $Giro = $_POST['giro'];
      $Direccion = $_POST['direccion'];
      $Nombre_contacto = $_POST['nombre_contacto'];
      $Fono_contacto = $_POST['fono_contacto'];
      $Correo_contacto = $_POST['correo_contacto'];
      $Cargo_contacto = $_POST['cargo_contacto'];
      $Condicion_pago = $_POST['condicion_pago'];

  	// conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
echo "Conectado a  MySQL<br>";

// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("cass_computacion",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");


   /* mysql_query("INSERT INTO cliente (id_ciudad, nombre, rut, fono, correo, giro, direccion, nombre_contacto, fono_contacto, correo_contacto, cargo_contacto, condicion_pago)
VALUES( '".$_POST[id_ciudad]."'
    	'".$_POST[nombre]."', 
    	'".$_POST[rut]."',
    	'".$_POST[fono]."',
    	'".$_POST[correo]."', 
    	'".$_POST[giro]."', 
    	'".$_POST[direccion]."',
    	'".$_POST[nombre_contacto]."', 
    	'".$_POST[fono_contacto]."', 
    	'".$_POST[correo_contacto]."', 
    	'".$_POST[cargo_contacto]."', 
    	'".$_POST[condicion_pago]."')",$dbhandle);
      	echo "datos guardados";
 	} else
 { 
  echo "Problemas al Insertar los Datos";
 }
  */
 	 


	mysql_query("INSERT INTO cliente(id_ciudad, nombre, rut, fono, correo, giro, direccion, nombre_contacto, fono_contacto, correo_contacto, cargo_contacto, condicion_pago) VALUES ('$Ciudad', '$Nombre','$Rut','$Fono','$Correo','$Giro', '$Direccion',  '$Nombre_contacto','$Fono_contacto','$Correo_contacto','$Cargo_contacto','$Condicion_pago')")or die(mysql_error());

}

?>


  
     

      
