<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script language="JavaScript">
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }
 
    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
    }
</script>
</head>
 
<body>
    <form name='frm'>
        <b>Sexo:</b><br>
        <input type="radio" name="rad" value="M" onclick="deshabilita()">
        Masculino<br>
        <input type="radio" name="rad" value="F" onclick="deshabilita()">
        Femenino<br>
        <input type="radio" name="rad" value="O" onclick="habilita()">
        Otro (Indique cual:
        <input type='text' name='txt1' disabled class='inputText'>
        <input type='text' name='txt2' disabled class='inputText'>
    </form>
</body>
</html>

