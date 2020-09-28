<?php
include 'config.php'; //Conectamos o incluimos la ocnfiguracion
try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
    $pdo = new PDO($dsn, USER, PASSWORD); //Siempre que queramos hacer la conexion llamamos a esta variable (este caso $PDO)
    echo "<script> alert('Conexión establecida')</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}