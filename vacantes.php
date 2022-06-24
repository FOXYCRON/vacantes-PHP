<html>
  <head> 
      <title> Vacantes </title>
  </head>
   <body background = "imagenes/vacantes.jpg">

   <form method = "post" action = "datos.php">

      <h4 align = center> <b> Ingrese Nombre: </b>
         <input type="text" name="nom"> </h4>
       <h4 align = center> <b> Elija el nivel de estudios: </b> </h4>
         <center> <input type="radio" name="radio1" value="sinestudios"> <b> Sin estudios. </b> </center>

         <center> <input type="radio" name="radio1" value="primaria"> <b> Estudios primaria. </b> </center>

         <center> <input type="radio" name="radio1" value="secundaria"> <b> Estudios secundaria. </b> </center>

         <center> <input type="radio" name="radio1" value="preparatoria"> <b> Estudios preparatoria. </b> </center>

      <br>
      <br>

         <center> <input type = "submit" value = "Confirmar";> </center>
     </form>

   </body>
</html>