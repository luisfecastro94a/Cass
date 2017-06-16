var iltotalm = 0;
function zumam(cual) 
{
f = cual.form;
n = cual.name;
for (var i = 0, nombres = f[n] , total = nombres.length; i < total; i++)
if (f[n][i] == cual && f[n][i].checked)
 var b = f[n][i].value = f.chbm[i].value;

if (String(b) == "undefined")
{
b = 0;
}

iltotalm = iltotalm + parseInt(b);

document.getElementById("valorMano").value = String(iltotalm);
}