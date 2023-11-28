<?php
$fecha="29/11/2023";
$aFecha=explode("/",$fecha);
print_r($aFecha);
if (count($aFecha)!=3)
{

header("location:error_forma.php");
exit;
}
?>