<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
</head>
<body>

<h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>