<?php
function conexion(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'u586907406_landing_page';
    $conn = mysqli_connect($host, $user, $password, $database, "3306");
    return $conn;
}
