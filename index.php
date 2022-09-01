<?php 
session_start();
echo 'INDEX';
if (isset($_SESSION['usuario'])){
    header('Location:contenido.php');
}else{
    header('Location:registro.php');
}


?>