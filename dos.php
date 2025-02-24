<?php
echo "<p>cambioO</p>";

$nombre=$_POST["nombre"];

$email=$_POST["email"];




echo "Bienvenido \t", $nombre, "   ", $email, "   has sido registrado en el sistema \n";
$fi=fopen("yoarchivo2.txt","a")
or die("problemas al crear archivo");

fwrite($fi, "Datos:");


fwrite($fi, "\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['email']);
fwrite($fi, "\n");
fwrite($fi, "------------------ \n\n");
?>