<?php
class Sesion {

// Funcion que me inicie la sesion 
public static function iniciar_sesion() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); // Inicia la sesión si no está ya iniciada
    }
}


// Funcion que lea la sesion 
public static function leer_sesion(){
    if (session_status() == PHP_SESSION_NONE)
    echo "No hay ninguna sesión iniciada.";
    return;
}

if (isset($_SESSION['user'])) {
    echo "El usuario en la sesión es: " . $_SESSION['user'];
}

// funcion que escriba la sesion 
public static function escribir_sesion($user, $usuario_fijo) {
    // Verifica si la sesión está iniciada
    if (session_status() === PHP_SESSION_NONE) {
        echo "No hay ninguna sesión iniciada.<br>";
        return;
    }

    // Comprobamos si el usuario pasado por parámetro está registrado en la sesión
    if (isset($_SESSION['user']) && $_SESSION['user'] === $user) {
        echo "$user está registrado en la sesión.<br>";
    } else {
        echo "$user no está registrado en la sesión.<br>";
    }

    // ahora comprobamos si el usuario que esta a sangre en este caso está registrado en la sesión
    if (isset($_SESSION['user']) && $_SESSION['user'] === $usuario_fijo) {
        echo "$usuario_fijo está registrado en la sesión.<br>";
    } else {
        echo "$usuario_fijo no está registrado en la sesión.<br>";
    }
}

// funcion que cierra la sesion
public static function cerrar_sesion() {
    // Verifica si hay una sesión activa
    if (session_status() === PHP_SESSION_NONE) {
        echo "No hay ninguna sesión iniciada.<br>";
        return;
    }
    // Limpiar las variables de sesión
    session_unset();
    // Destruir la sesión
    session_destroy();
    echo "Sesión cerrada correctamente.<br>";
}
}