<?php
class Login {
    // Función para iniciar sesión
    public static function login($user, $password) {
        // Inicia la sesión si no está ya iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Definir el usuario y la contraseña correctos
        $valid_user = 'usuario1';  // Usuario hardcodeado para pruebas
        $valid_password = '1234';  // Contraseña hardcodeada

        // Verifica si el usuario y la contraseña son correctos
        if ($user === $valid_user && $password === $valid_password) {
            // Guarda el usuario en la sesión
            $_SESSION['user'] = $user;
            echo "Login exitoso. Usuario " . $user . " ha iniciado sesión.<br>";
        } else {
            echo "Usuario o contraseña incorrectos.<br>";
        }
    }

    // Función para verificar si el usuario está logueado
    public static function estoy_logeado() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();  // Inicia la sesión si no está iniciada
        }

        // Verificar si el usuario está almacenado en la sesión
        if (isset($_SESSION['user'])) {
            echo "El usuario " . $_SESSION['user'] . " está logueado.<br>";
            return true;
        } else {
            echo "No hay ningún usuario logueado.<br>";
            return false;
        }
    }

    // Función para cerrar sesión
    public static function logout() {
        if (session_status() !== PHP_SESSION_NONE) {
            session_start();
            session_destroy();  // Destruir la sesión
            echo "Sesión cerrada.<br>";
        }
    }
}