<?php
$conexion = mysqli_connect("localhost", "root", "","datospg1");
mysqli_set_charset($conexion,"utf8")
?>

<?php


$idusuario = $_POST['idusuario'];
$nombre = $_POST['primernombre'];
$correo = $_POST['email'];
$psdw = $_POST['contraseña'];

//insertar
$sql="INSERT INTO usuario VALUES('$nombre','$correo','$psdw')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location:administrador.php");
    
}else {
}