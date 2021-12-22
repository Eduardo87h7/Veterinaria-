<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM datos WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $propietario = $row['propietario'];
        $telefono = $row['telefono'];
        $fecha = $row['fecha'];
        $hora = $row['hora'];
        $sintomas = $row['sintomas'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $propietario = $_POST['propietario'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $sintomas = $_POST['sintomas'];
    $query = "UPDATE datos set nombre = '$nombre', propietario='$propietario', telefono='$telefono', fecha=' $fecha', hora='$hora', sintomas = '$sintomas' WHERE id=$id";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'se actualizo correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}

?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Examen U4</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/solid.min.css" integrity="sha512-xIEmv/u9DeZZRfvRS06QVP2C97Hs5i0ePXDooLa5ZPla3jOgPT/w6CzoSMPuRiumP7A/xhnUBxRmgWWwU26ZeQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>"placeholder="nombre">
                            <input name="propietario" type="text" class="form-control" value="<?php echo $propietario; ?>" placeholder=" propietario">
                            <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="telefono">
                            <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>">
                            <input name="hora" type="time" class="form-control" value="<?php echo $hora; ?>">
                            
                        <div class="form-group">
                            <textarea name="sintomas" class="form-control" cols="30" rows="10" placeholder="actualizar sintomas"><?php echo $sintomas; ?></textarea>
                        </div>
                        <br>
                        <button class="btn btn-success" name="update">
                           Editar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>