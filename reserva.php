<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reserva de Habitación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0000FF;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Reserva de Habitación</h2>
                    </div>
                    <div class="card-body">
                        <form action="procesar_reserva.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name "edad" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Reserva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
