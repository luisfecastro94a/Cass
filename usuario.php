<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta charset="UTF-8">
<?php
include("conexion.php");

$consultam="SELECT * FROM cargo";
$result=mysql_query($consultam);


?>
	<title>Admin</title>
	<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	</head>
	<style>
	    
 * {
 
  font-family: Geneva, Arial, Helvetica, sans-serif;

}
	
  
   	 nav ul ul.dropdown-menu li a:hover {
	background: #CCCCCC;
 	}
 	 nav ul li:hover {
	background: #CCCCCC;
 	}
	img.logo {
		height: 50px;
		margin: auto;
		width: 50px;
		border: auto;
	}
	body, html{
     height: 100%;
	 background: #F2F2F2;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-weight: 400; 
	color:orange;
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    	font-size: 11px;
   		padding-top: 3px;
}

.main-login{
 	background-color: #ffffff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
	
   </style>
</head>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <img class="logo" src="img/cass_logo.png" alt="">
    </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a  href="index.php">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratorio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cliente.php">Ingresar Cliente</a></li>
            <li><a href="cliente.encargado.php">Ingresar Encargado</a></li>
            <li><a href="#">Ingreso Garantia</a></li>
            <li><a href="#">Presupuesto</a></li>
            <li><a href="#">Cotización</a></li>
            <li><a href="#">Repuesto</a></li>
            <li><a href="#">Generar OT</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="equipo.entrada.php">Entrada Equipo</a></li>
            <li><a href="equipo.salida.php">Salida Equipo</a></li>
          </ul>
        </li>
        <li><a  href="#">Contratos</a></li>
        <li><a  href="#">Terreno</a></li>
        <li><a  href="#">Soporte Instalaciones</a></li>
        <li><a  href="#">Repuestos</a></li>
        <li><a  href="#">Orden de Trabajo</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ciudad.php">Ciudad</a></li>
            <li><a href="usuario.php">Usuario</a></li>
             <li><a href="proveedor.php">Proveedor</a></li>
            <li><a href="uf.php">Uf</a></li>
            <li><a href="comision.php">Comisiones</a></li>
            <li><a href="periodo.php">Periodo</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<body>

	<a href="usuario.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="usuario.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

		<div class="container">
			<div class="row main">
						<div class="panel-heading">
	               		<div class="panel-title text-center">
	               				<h1 class="title">Crear Usuario</h1>
	               				<hr />
	               			</div>
	            		</div> 

				<div class="main-login main-center">
					<form class="form-horizontal" method="POST" action="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Apellido</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Apellido"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Domicilio</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="domicilio" id="domicilio"  placeholder="Domicilio"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Fono</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fono" id="fono"  placeholder="Fono"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Rut</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rut" id="rut"  placeholder="Rut"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Correo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="correo" id="correo"  placeholder="Correo"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="clave" id="clave"  placeholder="Contraseña"/>
								</div>
							</div>
						</div>
						
						<div class="form-group" >
							<label for="">Cargo</label>
							<select id="id_cargo" class="form-control" name="id_cargo" > 
								<option value="" selected="">-------------Selecciona Cargo-------------</option>
								 <?php
						      			while($fila=mysql_fetch_array($result))
						 		 {?>
						     	 <option value="<?php echo $fila['0']?>"> <?php echo $fila['1'];?></option>
						 		 <?php } ?>
							</select>
						</div>
						<?php
						include("conexion.php");

						$sol="SELECT * FROM nivelacceso";
						$reg=mysql_query($sol);

						?>		
						<div class="form-group" >
							<label for="">Nivel de Acceso</label>
							<select id="id_cargo" class="form-control" name="id_cargo" > 
								<option value="" selected="">-------------Selecciona Cargo-------------</option>
								 <?php
						      			while($fila1=mysql_fetch_array($reg))
						 		 {?>
						     	 <option value="<?php echo $fila['0']?>"> <?php echo $fila1['1'];?></option>
						 		 <?php } ?>
							</select>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
				       </div>
				     
				</form>
			</div>
		</div>
		
<?php
if
    (isset($_POST['id_nivelacceso']) && !empty($_POST['id_nivelacceso']) &&
     isset($_POST['id_cargo']) && !empty($_POST['id_cargo']) &&	
     isset($_POST['nombre']) && !empty($_POST['nombre']) &&
     isset($_POST['apellido']) && !empty($_POST['apellido']) &&
     isset($_POST['domicilio']) && !empty($_POST['domicilio']) &&
     isset($_POST['fono']) && !empty($_POST['fono']) &&
     isset($_POST['rut']) && !empty($_POST['rut']) &&
     isset($_POST['clave']) && !empty($_POST['clave']) &&
     isset($_POST['correo']) && !empty($_POST['correo']))

  {

      $nivelacceso = $_POST['id_nivelacceso']; 
      $cargo = $_POST['id_cargo'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $domicilio = $_POST['domicilio'];
      $fono = $_POST['fono'];
      $rut = $_POST['rut'];
      $clave = $_POST['clave'];
      $correo = $_POST['correo'];
  

    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_rut=mysql_query("SELECT rut FROM usuario WHERE rut='$rut'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
<p class='avisos'>El RUT ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}
else{
  
  $consulta=mysql_query("INSERT INTO usuario (id_nivelacceso, id_cargo, nombre, apellido, domicilio, fono, rut, clave, correo) VALUES ('$nivelacceso', '$cargo','$nombre','$apellido','$domicilio','$fono', '$rut',  '$clave','$correo')")or die(mysql_errno());
  echo " 
    <h1><p class='avisos'>Usuario Creado con exito</p></h1>
       "; 
}

}
?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="validarrut.js"></script>
    <script src="validaletras.js"></script>
    <script src="validanumeros.js"></script>
    <script src="validaremail.js"></script>
    <script src="validartelefono.js"></script>
	</body>
	<footer></footer>
</html>