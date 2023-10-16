<?php  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract ($_POST);
    
    require_once($_SERVER["DOCUMENT_ROOT"] . '/miniproyecto/config/dataBase.php');
    
    if ((isset($_FILES['imagen']['name'])) && !empty($_FILES['imagen']['name']) ) {
        $imgName = $_FILES["imagen"]["name"];
        $tmp_name = $_FILES["imagen"]["tmp_name"];
        $type = $_FILES["imagen"]["type"];
        $data_img = file_get_contents($tmp_name);

        if(empty($password)){
            $sql = "UPDATE usuarios SET name=?, bio=?,phone =?,photo =? , type_img = ?  WHERE email = ?";
            $stmt = $mysqli->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssssss", $name, $bio,$phone, $data_img,$type, $email);
                $stmt->execute();
                $stmt->close();
            }   
        }else {    
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE usuarios SET name=?, password=?, bio=?,phone =?,photo =? , type_img = ?  WHERE email = ?";
            $stmt = $mysqli->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("sssssss", $name,$hash, $bio,$phone, $data_img,$type, $email);
                $stmt->execute();
                $stmt->close();
            }     
        }
    } else {
        if(empty($password)){
            $sql = "UPDATE usuarios SET name=?, bio=?,phone =? WHERE email = ?";
            $stmt = $mysqli->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssss", $name, $bio,$phone, $email);
                $stmt->execute();
                $stmt->close();
            }   
        }else {    
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE usuarios SET name=?, password=?, bio=?,phone =? WHERE email = ?";
            $stmt = $mysqli->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("sssss", $name,$hash, $bio,$phone, $email);
                $stmt->execute();
                $stmt->close();
            }     
        }
    }

    $iniciar_Sesion = $mysqli->query("SELECT * FROM `usuarios` WHERE email = '$email';");

    if ($iniciar_Sesion->num_rows === 1){
        $Informacion =  $iniciar_Sesion->fetch_assoc();
        $_SESSION["user"] = $Informacion; 
        header("location: ../views/personal_Info.php");
    } else {
        echo "valida tu información";
    }
}
?>