<?php
include("conexion.php");
if (isset($_SESSION['correo'])){
  echo '<script> window.location="inicio.php"; </script>';
}

?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">

<style>

 * {
 
  font-family: Geneva, Arial, Helvetica, sans-serif;

}
body {
  background-image: url("img/puerto_montt.png");
  /* Nos aseguramos que la imagen de fondo este centrada vertical y

  /*horizontalmente en todo momento */
  background-position: center center;
  /* La imagen de fondo no se repite */
  background-repeat: no-repeat;
  /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
     la altura del contenido supere la altura de la imagen. */
  background-attachment: fixed;
  /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
     del navegador */
  background-size: cover;
  /* Fijamos un color de fondo para que se muestre mientras se está
    cargando la imagen de fondo o si hay problemas para cargarla  */
  background-color: #464646;
  background: url(img/puerto_montt.png) center center cover no-repeat fixed;
}

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  margin-top: 10px; 
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1); 
  background: rgba(0,0,0,0.3); 
  border-radius: 15px;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .form{
    color: #fff;
    text-align: center;
    text
  }
  .lab {
    color: white;
  }  
  @media (max-height: 480px) {
    .wapper{
      height: 100%;
    }
  }
    img {
    height: 60%;
    margin: 5px 10px 5px 80px;
    width: 40%;
    border: auto;
    
  }
}
</style>

<div class="wrapper">
    <form class="form-signin" method="POST" action="" > 
      <img src="img/cass_logo.png" alt="">
      <h2 class="form">Iniciar Sesion</h2>
      
      <label class="lab" for="">Usuario</label>
      <input type="text" class="form-control" name="usuario" placeholder="Email" required="" autofocus="" />

      <label  class="lab" for="">Contraseña</label>
      <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required=""/>      
        <br>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Ingresar</button>   
    </form>
</div>

<?php

include("conexion.php");
if (isset($_POST['login'])){
    $usuario = $_POST['usuario'];//entre [] va el nombre de mi input
    $contraseña = $_POST['contraseña'];
    $log = mysql_query("SELECT * FROM usuario WHERE correo='$usuario' AND clave='$contraseña' ");
    if (mysql_num_rows($log)>0) {
      //esto me permite listar a los usuarios
      $row = mysql_fetch_array($log);
      $_SESSION["correo"]=$row['correo'];
      echo 'Iniciando Sesion para'.$_SESSION['correo'].'<p>';//esta es una variable de session
      echo '<script> window.location="inicio.php"; </script>';

    }else{
      echo '<script> alert("Usuario o Contraseña Incorrectos."); </script>';
      echo '<script> window.location="index.php" </script>';//deberia ser index.php
    }
}
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/inicio.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>