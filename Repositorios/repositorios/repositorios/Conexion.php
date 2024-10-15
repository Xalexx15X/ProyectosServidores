<?php
private static PDO con  = null;

public static function getConection():PDO
{
    if (con == null){
        con = new PDO("Cadena de conexion")
    }
    return con;
}