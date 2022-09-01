<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_reg.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/91c53bd43f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="warp">
        <div class="titulo">
            <h1>Login</h1>
        </div>
        <div class="formulario">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
            <div class="form-group">
                <i class="icon-cog icono izq fa fa-user"></i>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="">
            </div>
            <div class="form-group">
            <i class="icon-cog fa-solid fa-lock"></i>
            <input type="password" class="form-control" name="password" placeholder="Password" value="">
            </div>
                <!-- <input type="text" class="form-control" name="usuario" placeholder="Usuario" value=""> -->
                <input type="submit" value="Login" name="submit" class="btn">
            </form>
        </div>

        <div class="texto">
            <p>You  don't have account?</p>
            <a href="registro.php">Register Now!</a>
        </div>

    </div>
</body>

</html>