
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
    <h4>FORMULARIO DEL REGISTRO DEL TÉCNICO  </h4>
     <form id="frmDatos" method="POST" action="ingresarDatosTecnico.php">

    

           <input class="controls" type="text" name="nombres" id="nombres" placeholder="ingrese los nombres">


           <input class="controls" type="email" name="correo" id="correo" placeholder="ingrese el correo">

           <input class="controls" type="text" name="cargo" id="cargo" placeholder="ingrese el cargo" required maxlength="250">

           <input class="controls" type="text" name="lugar" id="lugar" placeholder="ingrese el lugar  ">
           <input class="controls" type="number" name="contacto" id="contacto" placeholder="ingrese el contacto">

           <input class="botons"  type="submit" value="Ingresar datos ">
         
           <center>
            <a href="index.php" class="botons"> Cancelar y regresar al menú principal </a>
           </center>
         
         
          
     </form>    
   
  </section>

</body>
</html>




 