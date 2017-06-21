<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Combobox</title>
  <link rel="stylesheet" href="css/jquery-ui.css">

  <style>
  .custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
  }
  </style>



</head>

<body>
 

<form action="a.php" method="POST">

<?php
include("conexion.php");


$consulta4="SELECT * FROM cliente ";
$asig3=mysql_query($consulta4);

?>
<div class="ui-widget" >
<label for="">Cliente</label>
<select id="combobox" class="form-control" name="filtrar" > 
<option value="" selected="">---Seleccionar Cliente---</option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['2'];?></option>
  <?php } ?>
</select>
</div>

</form>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/buscaot.js"></script>
  <script src="js/jquery.js"></script>



</body>
</html>