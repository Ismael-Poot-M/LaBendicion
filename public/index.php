<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Tortillería</title>
</head>
<body>

<h2>Iniciar Sesión</h2>

<form method="POST" action="login.php">
    <input type="email" name="email" placeholder="Correo" required><br><br>
    <input type="password" name="password" placeholder="Contraseña" required><br><br>
    <button type="submit">Entrar</button>
</form>

</body>
</html>