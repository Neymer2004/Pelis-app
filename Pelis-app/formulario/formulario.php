<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<style>

    h1{
        color: blue;
        margin-left: 8%;
    }
    .fondo{
        max-width: 700px;
        height: 60vh;
        margin: auto;
        border-top: 20px;
        background-color: red;
        box-shadow: 15px 10px rgb(66, 39, 39); 
    }
    input{
    width: 80%;
    height: 30px;;
    font-size: 25px;
    margin-left: 5%;
    }
    a{
    color: white;
    text-decoration: none;
    }     
    button{
        width: 25%;
        height: 50px;
        background-color: rgb(57, 124, 219);
        color: white;
        margin-left: 5%;
        font-size: 25px;
    }
</style>
<body>
    
    
    
    <div class="fondo">

        <?php
            //creamos conexion;
            $cn = mysqli_connect('localhost','root','','proyecto');

            if($cn){
               /*  echo('conecion OK'); */
            }else{
                echo('error');
            }
        //verificamos que la variable GET tenga contenido

        if(isset($_GET['nombre'])){
            //recibimos las variables
            $nombre = $_GET['nombre'];
            $dni = $_GET['dni'];
            $telefono = $_GET['telefono'];
            $correo = $_GET['correo'];
            //creamos la consulta a la base de datos.

            $query = 'INSERT INTO formulario VALUES ("'.$nombre.'","'.$dni.'","'.$telefono.'","'.$correo.'") ';
            $result = mysqli_query($cn,$query);
            if($result == TRUE){
                echo('<BR>'.'Se guardo correctamente');
            }
        }
        
        ?>
<p></p>
        <h1>Formulario</h1>
        
        <form action="formulario.php" method="get">
        <input type="text" name="nombre" id="nombre" placeholder="digite su nombre" size="35">
        <br>
        <input type="dni" name="dni" id="dni" placeholder="digite su DNI" size="35"
        minlength="8" maxlength="8">
        <br>
        <input type="tel" name="telefono" id="telefono" placeholder="digite su telefono" size="35"
        minlength="9" maxlength="9">
         <br>
         <input type="text" name="correo" id="correo" placeholder="digite su correo" size="35">
          <br>
    <br>
        <button type="submit">Guardar</button>
        <button><a href="../formulario/registros.php">Ver Registro</a></button>
        <button><a href="../index.html">ir a inicio</a></button>
    </form>
    <script>
        function captura(){
          var nombre=document.getElementById("nombre").value;
          var dni=document.getElementById("dni").value;
          var telefono=document.getElementById("telefono").value;
          var telefono=document.getElementById("correo").value;
        }
    </script>
<!-- 
        <?php
            $query = 'SELECT * FROM formulario';
            $result = mysqli_query($cn,$query);
            
                ?>
                            <?php
                            foreach ($result as $row){
                                echo('<tr><td>');
                                echo($row['Nombre']);
                                echo('</td><td>');
                                echo($row['DNI']);
                                echo('</td><td>');
                                echo($row['Telefono']);
                                echo('</td><td>');
                                echo($row['Correo']);
                                echo('</td></tr>'); 
                            }?>
            <?php
            
            mysqli_close($cn);
        ?>
 -->
 <script src="instruccion.js"></script>

</div>

</body>
</html>  