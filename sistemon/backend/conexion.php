<?php 
$servername='localhost';
$username='root';
$password='';
$db='raizapp';
$conexion=mysqli_connect($servername,$username,$password,$db);
if(!$conexion){
    die ("error ".mysqli_connect_error());
}
// echo "conexion exitosa";
?>