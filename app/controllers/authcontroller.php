<?php
require_once __DIR__ . '/../models/user.php';

class AuthController {

    public function register($nombre, $email, $password, $rol_id) {
        $userModel = new User();

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        return $userModel->create($nombre, $email, $hashedPassword, $rol_id);
    }

    public function login($email, $password) {
        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;

            header("Location: ../public/dashboard.php");
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: ../public/index.php");
    }
}