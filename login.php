<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

session_start();

if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = $_POST["usuario"];
}

echo '<h2>Bienvenido</h2>';
echo '<h2>' . $_SESSION["user"] . '</h2>';

if (!isset($_SESSION["id"])) {
    session_regenerate_id();
}

$_SESSION["id"] = session_id();

echo '<h1>ID de Sesión: ' . $_SESSION["id"] . '</h1>';
echo '<a href="logout.php" title="Cerrar Sesión">Cerrar Sesión</a>';
?>
