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
    <h4>Formulario Registro del monitoreo</h4>
     <form id="frmDatos" method="POST" action="ingresarDatosMonitoreo.php">
           <input class="controls" type="text" name="codArbol" id="codArbol" placeholder="ingrese el código del arbol" required maxlength="150">

           <input class="controls" type="text" name="codFruto" id="codFruto" placeholder="ingrese el código del fruto" required>


           <input class="controls" type="text" name="incidencia" id="incidencia" placeholder="Ingrese la incedencia">

           <input class="controls" type="text" name="severidad" id="severidad" placeholder="ingrese la severidad del caso">

          <input class="botons"  type="submit" value="Ingresar datos "> 
         
           <center>            
          
            <a href="index.php" class="botons"> Cancelar y regresar al menú principal </a>
           </center>
         
         
          
     </form>   
   
  </section>

</body>
</html>
