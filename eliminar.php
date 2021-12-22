<?php
include ("conexion.php");

$id=$_GET['id'];
$eliminar = "DELETE FROM datos where id='$id'";
$resultadoeliminar = mysqli_query($conexion,$eliminar);
if($resultadoeliminar){
    header("Location: index.php");
}
else{
    echo "<script>alert('NO SE PUDO ELIMINAR'); windows.history.go(-1);</script>";
}