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
                <span class="fa fa-search"></span><br>
                <h2>CREAR<br>PRODUCTOS <br> MEDICOS</h2><br>
                <br>
                <br>
                <br>
                <h5>NOTA <br>Para la verificaciòn de los productos se debe seleccionar una fecha y se veran los productos no vencidos para esa fecha</h5>
            </section>
            
        </section>

        <form action="consulta.php" class="form_contact" method="POST">
            
             <div class="user_info">
                
                
                <label for="FechaActual">Selecionar fecha *</label>
                <input type="date"  name="FechaActual" id="FechaActual" >
  
                <label for="FechaActual">Selecionar fecha *</label>
                <br>
                <textarea name="textarea" ></textarea>
                

                <br>
                <br>
                <br>
                <br>
                <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
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

if(isset($_POST['btn_consultar']))
{
  
  $FechaActual = $_POST ['FechaActual'];

  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2  WHERE Fecha = '$FechaActual'");
while($consulta = mysqli_fetch_array($resultados))
{
echo $consulta['Nombre']."<br>";
echo $consulta['Cantidad']."<br>";

}
}
      include("php/cerrar_conexion.php");
   
      ?>

</body>
</html>



