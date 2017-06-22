<html>
<head>
<script>
//Codigo que muestra la cuenta atras hasta el final del año 2010
//La Web del Programador
//http://www.lawebdelprogramador.com
 
//variables que determinan la fecha y hora final de la cuenta atras
toYear=2017;
toMonth=12;
toDay=31;
toHour=23;
toMinute=59;
toSecond=59;
 
function countDown()
{
	new_year=0;
	new_month=0;
	new_day=0;
	new_hour=0;
	new_minute=0;
	new_second=0;
	actual_date=new Date();
 
	if(actual_date.getFullYear()>toYear)
	{
		//si ya nos hemos pasado del año, mostramos los valores a 0
		form.second.value=0;
		form.minute.value=0;
		form.hour.value=0;
		form.day.value=0;
		form.month.value=0;
		form.year.value=0;
	}else{
		new_second=new_second+toSecond-actual_date.getSeconds();
		if(new_second<0)
		{
			new_second=60+new_second;
			new_minute=-1;
		}
		form.second.value=new_second;
 
		new_minute=new_minute+toMinute-actual_date.getMinutes();
		if(new_minute<0)
		{
			new_minute=60+new_minute;
			new_hour=-1;
		}
		form.minute.value=new_minute;
 
		new_hour=new_hour+toHour-actual_date.getHours();
		if(new_hour<0)
		{
			new_hour=24+new_hour;
			new_day=-1;
		}
		form.hour.value=new_hour;
 
		new_day=new_day+toDay-actual_date.getDate();
		if(new_day<0)
		{
			x=actual_date.getMonth();
			if(x==0||x==2||x==4||x==6||x==7||x==9||x==11){new_day=31+new_day;}
			if(x==3||x==5||x==8||x==10){new_day=30+new_day;}
			if(x==1)
			{
				//comprobamos si es un año bisiesto...
				if(actual_date.getYear()/4-Math.floor(actual_date.getYear()/4)==0)
				{
					actual_date=29+actual_date;
				}else{
					actual_date=28+actual_date;
				}
			}
		}
		form.day.value=new_day;
 
		new_month=-1;
		new_month=new_month+toMonth-actual_date.getMonth();
		if(new_month<0)
		{
			new_month=11+new_month;
			new_year=-1;
		}
		form.month.value=new_month;
 
		new_year=new_year+toYear-actual_date.getFullYear();
		if(new_year<0)
		{
			form.year.value=0;
		}else{
			form.year.value=new_year;
			//vuelve a ejecutar la funcion dentro de 1000 milisegundos = 1 segundo
			setTimeout("countDown()",1000);
		}
	}
}
</script>
 
<style type="text/css">
.form_input
{
	font-family: Verdana;
	font-size: 12;
	color: #ffffff;
	border-width: 0;
	background-color: #000077;
	text-align: right;
}
</style>
 
</head>
 
<!--Al iniciar la pagina, ejecutamos la funcion-->
<body onload="countDown();">
 
<!--formulario deshabilitado donde se muestran los datos-->
<form name="form">
Tiempo que falta hasta el fin del año 2017.<br><br>
<input type="text" size="5" class="form_input" name="year" disabled> años<br>
<input type="text" size="5" class="form_input" name="month" disabled> meses<br>
<input type="text" size="5" class="form_input" name="day" disabled> dias<br>
<input type="text" size="5" class="form_input" name="hour" disabled> horas<br>
<input type="text" size="5" class="form_input" name="minute" disabled> minutos<br>
<input type="text" size="5" class="form_input" name="second" disabled> segundos<br>
</form>
 
 <a href="fecha.diferencia.php">diferencia de fechas</a>

</body>
</html>

<!DOCTYPE html>
<html><head><title>Ejemplo aprenderaprogramar.com</title><meta charset="utf-8">
<style type="text/css">body {background-color:yellow; font-family: sans-serif;} label{color: maroon; display:block; padding:5px;}
</style>
<script type="text/javascript">
window.onload = function () {
document.formularioContacto.nombre.focus();
document.formularioContacto.addEventListener('submit', validarFormulario);
}
 
function validarFormulario(evObject) {
evObject.preventDefault();
var todoCorrecto = true;
var formulario = document.formularioContacto;
for (var i=0; i<formulario.length; i++) {
                if(formulario[i].type =='text') {
                               if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
                               alert (formulario[i].name+ ' no puede estar vacío o contener sólo espacios en blanco');
                               todoCorrecto=false;
                               }
                }
                }
if (todoCorrecto ==true) {formulario.submit();}
}
 
</script></head>
<body><div id="cabecera"><h1>Portal web aprenderaprogramar.com</h1><h2>Didáctica y divulgación de la programación</h2>
</div>
<!-- Formulario de contacto -->
<form name ="formularioContacto" class="formularioTipo1" method="get" action="http://aprenderaprogramar.com">
<p>Si quieres contactar con nosotros envíanos este formulario relleno:</p>
<label for="nombre"><span>Nombre:</span> <input id="nombre" type="text" name="nombre" /></label>
<label for="apellidos"><span>Apellidos:</span> <input id="apellidos" type="text" name="apellidos" /></label>
<label for="email"><span>Correo electrónico:</span> <input id="email" type="text" name="email" /></label>
<label><input type="submit" value="Enviar"><input type="reset" value="Cancelar"></label>
</form></body></html>