<?php
include '../Model/user.php'; //Añadimos la Clase. Conectamos con la clase en user.php
include '../Model/conexion.php'; //Conexion con la bd
$femail=$_POST ['femail']; //recueracion de datos
$fpassword=$_POST ['fpassword'];
//echo "email es: {$femail} y la contraseña es: {fpassword}"; //mostrar respuesta
$user=new User($femail, $fpassword); //Crear objeto User (la primera en mayuscula porque es una class) a traves de la clase. Una variable de moemoria 
echo $user->getEmail();
echo $user->getPassword();
//Query de si el usuario existe o no
$sql="SELECT * FROM tbl_user WHERE email=? and password=?"; // el interrogante se substituye por lo que introduzcas. Asi no se pueden hacer inyecciones sql
$smt=$pdo->prepare ($sql); //En smt esta la conexion y la sentencia sql
$smt->bindParam (1, $femail); //Indicamos que el primer interrogante que encuentre es el correo
$smt->bindParam (2, $fpassword); //Indicamos que el segundo interrogante que encuentre es la contraseña
$smt->execute();
$numUser=$smt->rowCount (); //Filas encontradas (en este caso usuarios encontrados)
echo $numUser; // Mostramos los usuarios encontrados

if ($numUser==1){
    //Redireccion a home.php
    header("location:../View/home.php");
}else{
    //Fallo en la autenticacion
    header("location:../View/vista_login.html?=1");
}