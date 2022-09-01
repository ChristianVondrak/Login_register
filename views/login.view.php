<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="warp">
        <div class="titulo">
            <h1>Escribeme un mensaje!</h1>
        </div>
        <div class="formulario">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="">
                <input type="email" class="form-control" name="email" placeholder="Email" value="">
                <textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>

                <input type="submit" value="Enviar correo" name="submit" class="btn">
            </form>
        </div>
    </div>
</body>

</html>