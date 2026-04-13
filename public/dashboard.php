<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Bienvenido <?php echo $user['nombre']; ?></h2>
<p>Rol: <?php echo $user['rol_id']; ?></p>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>