var iltotal = 0;
function zuma(cual) 
{
f = cual.form;
n = cual.name;
for (var i = 0, nombres = f[n] , total = nombres.length; i < total; i++)
if (f[n][i] == cual && f[n][i].checked)
 var b = f[n][i].value = f.chb[i].value;

if (String(b) == "undefined")
{
b = 0;
}

iltotal = iltotal + parseInt(b);

document.getElementById("can").value = String(iltotal);
} 