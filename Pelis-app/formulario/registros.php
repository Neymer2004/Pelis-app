<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<style>
    .fondo {
        max-width: 1000px;
        height: 100vh;
        margin: auto;
        border-top: 20px;
        background-color: red; 
    }
    table{
        width:900px ;
        margin-top: 50px;
        margin: auto;
        color: blanchedalmond;
        padding: 10px 15px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    th{
        color: black;
    }
    button{
        background-color: blanchedalmond;
        margin-left: 8%;
        width: 20%;
        height: 40px;
    }
    a{
        text-decoration: none;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>

<body>
    <div class="fondo">

        <?php
        //creamos conexion;
        $cn = mysqli_connect('localhost', 'root', '', 'proyecto');
        if ($cn) {
            // echo('conecion OK');
        } else {
            echo ('error');
        }
        //verificamos que la variable GET tenga contenido
        if (isset($_GET['nombre'])) {
            //recibimos las variables
            $nombre = $_GET['nombre'];
            $dni = $_GET['dni'];
            $telefono = $_GET['telefono'];
            $correo = $_GET['correo'];
            //creamos la consulta a la base de datos.
            $query = 'INSERT INTO formulario VALUES ("' . $nombre . '","' . $dni . '","' . $telefono . '","' . $correo . '") ';
            $result = mysqli_query($cn, $query);
            if ($result == TRUE) {
                echo ('<BR>' . 'Se guardo correctamente');
            }
        }

        ?>

        <?php

        $query = 'SELECT * FROM formulario';
        $result = mysqli_query($cn, $query);

        ?>
        <table border=2>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                </tr>
            <tbody>
                <p></p>
                <?php
                foreach ($result as $row) {
                    echo ('<tr><td>');
                    echo ($row['Nombre']);
                    echo ('</td><td>');
                    echo ($row['DNI']);
                    echo ('</td><td>');
                    echo ($row['Telefono']);
                    echo ('</td><td>');
                    echo ($row['Correo']);
                    echo ('</td></tr>');
                } ?>
            </tbody>
            </thead>
        </table>

        <br>
        <button><a href="../index.html">ir a inicio</a></button>
        <button><a href="../formulario/formulario.php"> Registrar Nuevo</a></button>
        <?php

        mysqli_close($cn);
        ?>
    </div>
    <script type="text/javascript" src="../formulario/instruccion.js"></script>
</body>

</html>