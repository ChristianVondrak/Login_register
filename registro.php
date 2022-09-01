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

           $password = hash('sha512',$password);
           $cpassword = hash('sha512',$cpassword);

           if ($password != $cpassword) {
            $errores.= "<li>Passwords arent's the same</li>";  
           }
    }

    if ($errores=='') {
        $statement = $conexion->prepare('INSERT INTO usuarios (ID,user,pass) VALUES (null,:usuario,:pass)');
        $statement->execute(array(
            ':usuario'=>$usuario,
            ':pass'=>$password));

            header('Location: login.php');
    }


}


require 'views/registro.view.php';
?>