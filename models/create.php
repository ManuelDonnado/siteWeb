<?PHP  

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract ($_POST);
    require_once($_SERVER["DOCUMENT_ROOT"] . '/miniproyecto/config/dataBase.php');

    if ((isset($name, $email, $password)) && ($name != "") && ($email != "") && ($password != "")) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $registrar =  $mysqli->query("INSERT INTO `usuarios`(id_usuario, email, password, name) VALUES (NULL,'$email','$hash','$name');");
            
    }  if ($registrar) {
        $infoUsuario = $mysqli->query("SELECT * FROM `usuarios` WHERE email = '$email';");
        session_start();
        $_SESSION["user"] = $infoUsuario->fetch_assoc();
         header("location: ../views/personal_Info.php");
    }   else {
        header("location: ../views/index.php");

    }
}

?>