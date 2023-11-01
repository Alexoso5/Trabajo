<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Reserva</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: 	#33DDFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmación de Reserva</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $correo = $_POST["correo"];
            
            // Procesa los datos y muestra un mensaje de confirmación
            echo "<p>Tu reserva ha sido realizada con éxito.</p>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Correo: $correo</p>";
        } else {
            echo "<p>No se recibieron datos de reserva.</p>";
        }
        ?>
    </div>

</body>
</html>
