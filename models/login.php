<?php  
if ($_SERVER["REQUEST_METHOD"] === "POST"){

    require_once($_SERVER["DOCUMENT_ROOT"] . '/miniproyecto/config/dataBase.php');
    extract ($_POST);
    echo $email;
    echo $password;

    $iniciar_Sesion = $mysqli->query("SELECT * FROM `usuarios` WHERE email = '$email';");
    
    if ($iniciar_Sesion->num_rows === 1){
        $Informacion =  $iniciar_Sesion->fetch_assoc();
        if (password_verify(trim($password),trim($Informacion["password"]) )){
            session_start();
            $_SESSION["user"] = $Informacion; 
            header("location: ../views/personal_Info.php");
        } else {
            echo"Los datos no coinciden";
        }

    }  else {
        echo"No coincide nada";
    }
}  else {
    echo"No esta ingresando desde post";
}


?>