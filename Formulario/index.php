<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="icon" type ="icon.png" href="https://image.flaticon.com/icons/png/512/1458/1458496.png">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>










    <section class="form_wrap">

        <section class="panel_izq">
            <section class="info_title">
                <span class="fa fa-plus-square"></span><br>
                <h2>CREAR<br>PRODUCTOS <br> MEDICOS</h2><br>
                <br>
                <br>
                <br>
                <h5>NOTA <br>Para la creaciòn de los productos deben estar todos los campos del formulario correctamente diligenciados</h5>
            </section>
            
        </section>

        <form action="index.php" class="form_contact" method="POST">
            
             <div class="user_info">
                
                <label for="Id"> Identificador referencia *</label>
                <input type="text"  name="Id" id="Id" placeholder="Ingrese identificador">

                <label for="Nombre">Nombre referencia *</label>
                <input type="text"  name ="Nombre" id="Nombre"    placeholder="Ingrese nombre de referencia">

                <label for="Laboratorio">Laboratorio que lo produce *</label>
                <input type="text"  name="Laboratorio" id="Laboratorio"  placeholder="Ingrese laboratorio">

                <label for="FechaActual">Fecha de vencimiento *</label>
                <input type="date"  name="FechaActual" id="FechaActual" >

                <label for="Cantidad"> Cantidad recibida *</label>
                <input type="text"  name="Cantidad" id="Cantidad" placeholder="Ingrese cantidad recibida"> <br>

                <br>
                <br>
                <br>
                <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar" id="btn_registrar">
                <a href="consulta.php"><input type="button" value="Ir consulta"></a>
            </div>
        </form>

    </section>
 
    <?php
    include("php/abrir_conexion.php");
    date_default_timezone_set ('America/Bogota');
    

$Id = "";
$Nombre = "";
$Laboratorio = "";
$FechaActual =  "";
$Cantidad = "";
$fecha = "";

      if(isset($_POST['btn_registrar']))
      {      
       
        $Id = $_POST['Id'];
        $Nombre = $_POST['Nombre'];
        $Laboratorio = $_POST['Laboratorio'];
        $FechaActual = $_POST ['FechaActual'];
        $Cantidad = $_POST ['Cantidad'];
        $fecha = date("Y-m-d H:i:s") ;


        mysqli_query($conexion, "INSERT INTO $tabla_db2 
        (Id,Nombre,Laboratorio,Fecha,Cantidad,Fechaactual ) 
          values 
        ('$Id','$Nombre','$Laboratorio', '$FechaActual','$Cantidad ','$fecha ')");

        echo '<script>alert ("Usted Se Ha registrado Correctamente")</script>';
      
      }
      include("php/cerrar_conexion.php");
      ?>

   
  

</body>
</html>



