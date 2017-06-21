<?php 
include("../conexion.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte de Orden de Trabajo</title>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>


		<style type="text/css">

		</style>

	</head>

	<body>



<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Reporte de Orden de Trabajo'
    },
    subtitle: {
        text: 'Cantidad de Ventas Equipos'
    },
    xAxis: {
        categories: [
<?php 
$sql =mysql_query("SELECT fecha_OT, valorReparacion FROM orden_trabajo ORDER BY valorReparacion DESC ");
    while ($res=mysql_fetch_array($sql)) {
 ?>
        ['<?php echo $res['fecha_OT'];?>'],
<?php 
}
 ?>

        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [
<?php 
$sql =mysql_query("SELECT valorReparacion FROM orden_trabajo ORDER BY valorReparacion DESC ");
    while ($res=mysql_fetch_array($sql)) {
 ?>

        ['<?php echo $res['valorReparacion'];?>'],
<?php 
}
?>

        ]

    }

    }]
});
        </script>





	</body>
</html>
