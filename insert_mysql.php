<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$propietario = $_POST["propietario"];
$telefono = $_POST["telefono"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$sintomas = $_POST["sintomas"];


$insertar = "INSERT INTO datos(nombre,propietario,telefono,fecha,hora,sintomas) values ('$nombre' , '$propietario', '$telefono', '$fecha', '$hora', '$sintomas' )";


$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
    echo "<script>alert('Registrado Correctamente') ; window.location='./index.php'</script>";
}else{
    echo "<script>alert('Error'); window,history.go(-1)</script>";
}