<?php
include 'conexion.php';
$nombre=$_POST["nombre"];

$email=$_POST["email"];




$insertar= "insert into usuarios(nombre,email) values ('$nombre','$email')";

$resultado = mysqli_query($conn, $insertar);
if(!$resultado){
echo "Error al registrarse";
}else{
    echo"Usuario registrado exitosamente";

}
mysqli_close($conn);

echo "Bienvenido \t", $nombre, "   ", $email, "   has sido registrado en el sistema \n";


?>
