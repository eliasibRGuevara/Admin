<?php
$conexion = mysqli_connect("localhost", "root", "","datospg1");
mysqli_set_charset($conexion,"utf8")
?>


<?php
   $id = $_POST['id'];
   $nombre = $_POST['primernombre'];
   $correo = $_POST['email'];
   $psdw = $_POST['contraseña'];

   $actualizar = "UPDATE SET contraseña='$psdw' WHERE idusuario = '$id'";
   $resultadoActualizar=mysqli_query($conexion,$actualizar);
   if($resultadoActualizar){
     header("Location: adminmodificar.php");
   }
     echo"<script>alert('No se pudo eliminar '); window.history.go(-1);</script>";
   
?>

