
 

<?php
    include("abrir_conexion.php");
      
    

$Id = "";
$Nombre = "";
$Laboratorio = "";
$FechaActual =  "";
$Cantidad = "";

      if(isset($_POST['btn_registrar']))
      {      
       
        $Id = $_POST['Id'];
        $Nombre = $_POST['Nombre'];
        $Laboratorio = $_POST['Laboratorio'];
        $FechaActual = $_POST ['FechaActual'];
        $Cantidad = $_POST ['Cantidad'];



        mysqli_query($conexion, "INSERT INTO $tabla_db2 
        (Id,Nombre,Laboratorio,Fecha,Cantidad) 
          values 
        ('$Id','$Nombre','$Laboratorio', '$FechaActual','$Cantidad ' )");


      
      }






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

      if(isset($_POST['btn_actualizar']))
      {
        echo "Presiono el boton actualizar";
      }

      if(isset($_POST['btn_eliminar']))
      {
        echo "Presiono el boton eliminar";
      }

    include("cerrar_conexion.php");
  ?>







