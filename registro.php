<?php 
session_start();


if (isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario= filter_var(strtolower($_POST['usuario']), FILTER_UNSAFE_RAW);
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

   $errores = '';
    if(empty($usuario) or empty($password) or empty($cpassword)){
        $errores.='<li>Please fill in all the fields correctly</li>';
    }else{
        try{
            $conexion=new PDO('mysql:host=localhost;dbname=usuarios','root','');

        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
           $statement= $conexion->prepare("SELECT * FROM usuarios WHERE user = :usuario");
           $statement->execute(array(':usuario'=>$usuario));

           $resultado = $statement->fetch();
           if ($resultado != false) {
            $errores .= '<li>Username already exist</li>';
           }
    }
}


require 'views/registro.view.php';
?>