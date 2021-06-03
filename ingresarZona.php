<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register"> 
    <h4>Formulario de registro de zona de estudio </h4>
     <form id="frmDatos" method="POST" action="ingresarDatosZona.php">

           <input class="controls" type="text" name="cordenadas" id="coordenadas" placeholder="Ingrese las coordenadas">


           <input class="controls" type="text" name="propietario" id="propietario" placeholder= "Ingrese el nombre de propietario">

           <input class="controls" type="text" name="cedula" id="cedula" placeholder="Ingrese el número de cédula" required maxlength="250">

           <input class="controls" type="text" name="variedad" id="variedad" placeholder="Ingrese la variedad">
           <input class="controls" type="text" name="densidad" id="densidad" placeholder="Ingrese la densidad">

           <input class="botons"  type="submit" value="Ingresar datos ">
         
           <center>
            <a href="index.php" class="botons"> Cancelar y regresar al menú principal </a>
           </center>
         
         
          
     </form>    
   
  </section>

</body>
</html>




 