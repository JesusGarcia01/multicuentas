<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" method="post" action="login.php">
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>
                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
            </div>
            <div id="derecho">
                <div class="titulo">Bienvenido</div>
                <hr>
                
            </div>
        </div>
    </div>
</body>
</html>
