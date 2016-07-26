<?php 

$nombre=$_POST['nombre'];
$apellido=$_POST['ape'];
$correo=$_POST['email'];
$mensaje=$_POST['mensaje'];



$link = mysqli_connect('localhost','root','','comentarios'); 

if (mysqli_connect_errno()) {
   echo "<script>alert('Tu mensaje no se pudo enviar intenta de nuevo por favor.'); 
document.location='contacto.php'; 
</script>";  

    exit();
}

$result2 = mysqli_query($link,"INSERT INTO `comentarios`.`comenta` (`nombre`, `apellido`, `correo`, `comentario`) VALUES ('".$nombre."', '".$apellido."', '".$correo."', '".$mensaje."');");
mysqli_close($link);
echo "<script>alert('Mensaje Enviado.. Gracias.'); 
document.location='contacto.php'; 
</script>";  

?>


