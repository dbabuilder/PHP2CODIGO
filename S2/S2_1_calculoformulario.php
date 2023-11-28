<?php
$monto=$_POST["monto"];
$montoIGV=$_POST["montoIGV"];
$montoIGV=$monto*$montoIGV;
$total=$monto+$montoIGV;

printf("<p>Monto: S/.%.2f</p>",$monto);
printf("<p>IGV: S/.%.2f</p>",$montoIGV);
print"<p>-----------------------</p>";
printf("<p>Total: S/.%.2f</p>",$total);

?>