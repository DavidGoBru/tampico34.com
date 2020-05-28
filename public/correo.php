<?php
    $destino= "pedro.matas.ortega@alumno.joyfe.es";
    $nombre = $_POST["FirstName"];
    $correo=$_POST["Email"];
    $telefono=$_POST["Phone"];
    $contenido="nombre: " . $nombre . "\n Correo: " . $correo;

    @mail($destino,$nombre,$contenido);

?>