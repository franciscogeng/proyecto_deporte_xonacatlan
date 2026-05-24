<?php
session_start();

include("conexion.php");

if(isset($_POST['login'])){

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = mysqli_query($conexion, "
        SELECT * FROM usuarios
        WHERE correo='$correo'
        AND password='$password'
    ");

    if(mysqli_num_rows($sql) > 0){

        $datos = mysqli_fetch_array($sql);

        $_SESSION['usuario'] = $datos['nombre'];

        header("Location: panel.php");

    }else{

        echo "
        <script>
            alert('Correo o contraseña incorrectos');
            window.location='index.html';
        </script>
        ";

    }

}else{

    header("Location: index.html");

}
?>