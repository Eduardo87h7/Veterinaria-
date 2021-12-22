<?php
include("conexion.php");
$consulta = "SELECT * FROM datos"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen U4</title>
</head>
<link rel=»stylesheet» href=»//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css»>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css">

<body>
    <div class="container d-flex justify-content-center ">
        <div class="card px-5 py-5">

            <div class="table-responsive">
                <table>
                    <tr>
                        <td class="edd"> <center><div style="background-color:#f00000; font-size: 25px; width: 1100px;" id="error"></center></div>
                        
                        </td>
                    
                    </tr>
                    
                </table>
                <table>
                    <tr>
                        <td>
                            <center><div style="background-color:#109b2e; font-size: 20px; width: 1100px; color: cornsilk;" id="exito"></div></center>
                        </td>
                    </tr>
                </table>
                <table class="table">
                   
                   <tr>

                       <td>
                       <form method="post" action="insert_mysql.php">
                        <div class="row"form-group mx-sm-3>
                            <h2>Datos del Paciente</h2>
                            <label class="col-md-4 control-label" for="mascota">Nombre Mascota</label> 
                            <div class="col-md-8"> <input type="text" id="mascota" name="nombre" class="form-control" placeholder="Nombre de la Mascota" /> </div>
                        </div>
                        <br>
                            <div class="row">
                                <label class="col-md-4 control-label" for="propietario">Propietario </label> 
                            <div class="col-md-8"> <input type="text" id="propietario" name="propietario" class="form-control" placeholder="Nombre dueño de la mascota" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-md-4 control-label" for="telefono">Telefono</label> 
                            <div class="col-md-8"> <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Telefono" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-md-4 control-label" for="fecha">fecha </label> 
                            <div class="col-md-8"> <input id="fecha" type="date" name="fecha" class="form-control" placeholder="" /> </div>
                        </div>
                         <br>
                         <div class="row">
                            <label class="col-md-4 control-label" for="hora">Hora </label> 
                            <div class="col-md-8"> <input id="hora" type="time" name="hora" class="form-control" placeholder="When can we call you?" /> </div>
                        </div>
                         <br>
                        <div class="row mt-3">
                            <label class="col-md-4 control-label" for="sintomas">Sintomas</label> 
                            <div class="col-md-8"> <textarea rows="6" id="sintomas" name="sintomas" class="form-control"></textarea> </div>
                            <button id="btn" class="btn btn-success mt-5" onclick="return enviarFormulario()">CREAR CITA <i class="fa fa-long-arrow-right ml-2 mt-1" ></i></button>                            
                        </div> 
                       </form>
                        
                       <td>
                       <div class="citas">
            <h3 class="citas_titulo" id="noele" >Administra tus citas</h3>


                <?php
                $resultado = mysqli_query($conexion, $consulta);
               
                
                while ($row = mysqli_fetch_assoc($resultado)) {

                ?>
                    <ul id="ctabla">
                        <li class="datos">Nombre: <?php echo $row["nombre"] ?></li>
                        <li class="datos">Propietario: <?php echo $row["propietario"] ?></li>
                        <li class="datos">Telefono: <?php echo $row["telefono"] ?></li>
                        <li class="datos">Fecha: <?php echo $row["fecha"] ?></li>
                        <li class="datos">Hora: <?php echo $row["hora"] ?></li>
                        <li class="datos">Sintomas: <?php echo $row["sintomas"] ?></li>
                        <li class="datos"><a href="eliminar.php?id=<?php echo $row["id"]?>" class="btn btn-danger">Eliminar</a> 
                        <a href="editar.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Editar</a></li>
                    </ul>
                <?php } ?>
        </div>
                      <!--  <h4 id="sinCita">No hay citas comienza creando una</h4>
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                           <h1 id="cita">
                               
                           </h1>
                           <center>
                           <div id="aqui"  class="aquim" style="border-color:green;  float: left; overflow: scroll;">
                            
                        </div>
                        </center>
                        <div></div>
                        </td> -->
                   </tr>
                </table>
              </div>
              
        </div>
    </div>
      

<script src="app.js"></script>
</body>
</html>