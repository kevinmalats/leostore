
<?php

// Juan Antonio Villalpando
// juana1991@yahoo.com 

// http://kio4.com

error_reporting (E_ALL  ^  E_NOTICE  ^  E_DEPRECATED);

// 1.- IDENTIFICACION nombre de la base, del usuario, clave y servidor

$db_host="95.216.33.133";
$db_name="leostore_syspromo";
$db_login="leostore_leo";
$db_pswd="leoadmin1234";

$con = mysql_connect($db_host, $db_login, $db_pswd) or die(mysql_error());
mysql_set_charset("utf8"); 

// 2.- CONEXION A LA BASE DE DATOS
mysql_select_db($db_name) or die(mysql_error());



$llegan=$_GET;
$peticion=$llegan['orden'];
// echo $peticion;

$hacer = mysql_query($peticion);

///////////////////////////////////////////////////////////////////////////////
// En los casos que hay SELECT y se debe enviar una respuesta actúa este código

    if (substr($peticion, 0, 6) == 'SELECT') {

    $resultado = mysql_query("SHOW COLUMNS FROM tb_productos");
    $numerodefilas = mysql_num_rows($resultado);
    if ($numerodefilas > 0) {
     
    while ($rowr = mysql_fetch_row($hacer)) {
     for ($j=0;$j<$numerodefilas;$j++) {
      $en_csv .= $rowr[$j].", ";
     }
     $en_csv .= "\n"."<br>";
    }
     
    }
     
    print $en_csv;

    }
/////////////////////////////////////////////////////////////////////////////// 
mysql_close($con);
?>