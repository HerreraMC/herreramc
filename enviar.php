<?php
$destinatario ="corporacionherreramc@gmail.com";
$nombre= $_POST['nombre'];
$nombre= $_POST['folio'];
$nombre= $_POST['clave'];
$postal= $_POST['postal'];
$estado= $_POST['estado'];
$municipio= $_POST['municipio'];
$colonia= $_POST['colonia'];
$calle= $_POST['calle'];
$numero= $_POST['numero'];
$calles= $_POST['calles'];
$referencias= $_POST['referencias'];
$telefono= $_POST['telefono'];


 $asunto="comprade producto"; 
     
$carta="De: $nombre\n";
     $carta .="folio: $folio\n";
     $carta .="clave: $clave\n";
     $carta .="postal: $postal\n";
     $carta .="estado: $estado\n";
     $carta .="municipio: $municipio\n";
     $carta .="colonia: $colonia \n";
     $carta .="calle: $calle\n";
     $carta .="numero: $numero\n";
     $carta .="calles: $calles\n";
     $carta .="referencias: $referencias\n";
     $carta .="telefono: $telefono\n";
         
         mail($destinatario,$asunto,$carta);
         



?>