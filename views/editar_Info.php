<?php
session_start();
    if (!isset($_SESSION["user"])){
    header("location: ../views/index.php");
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/editar.css">
    <title>Document</title>
</head>
<body>
    

<div class="container">

    <div class="user-menu">
            <div class="img-menu" >
        <?php  
            if (empty ($_SESSION["user"] ["photo"])){
                ?>  <img src="../assets/perfildefault.jpg" alt="imagen" height="50" width="50"> 
            <?php     
            }  else{
                $img = base64_encode($_SESSION["user"] ["photo"]);
            //echo "<img src='data:image/jpg;base64,$img' alt='picture' height='100' width='100' >";
                ?> <img id="profile"  src="data:<?= $_SESSION["user"] ["type_img"];?>;base64,<?= base64_encode($_SESSION["user"] ["photo"]);?>" alt="picture" width="50px" height="50px"> <?php
            } ?>
            </div>
        <span class="username">  <?=  $_SESSION["user"] ["name"] ?> </span>
        <div class="dropdown">
            <a href="#"> my profile</a>
            <a href="#">group chat</a>
            <a href="../models/logout.php">log out</a>
            </div>
    </div>
    



       

        <div class="encabezado" >
            <div>
                <a class="back" href="../views/personal_Info.php"> < Back </a>
            </div>
            <div>
            <h2>
                Change Info
            </h2>
            <h3>Changes will be reflected to every services</h3>
            </div>
         </div>



        <div  class="formulario">
            <form  action="../models/update.php" method="post" enctype="multipart/form-data" >

               
            

            <?php  
            if (empty ($_SESSION["user"] ["photo"])){
                ?>  <img src="../assets/perfildefault.jpg" alt="imagen" height="150" width="200"> 
            <?php     
            }  else{
                $img = base64_encode($_SESSION["user"] ["photo"]);
            //echo "<img src='data:image/jpg;base64,$img' alt='picture' height='100' width='100' >";
                ?> <img  src="data:<?= $_SESSION["user"] ["type_img"];?>;base64,<?= base64_encode($_SESSION["user"] ["photo"]);?>" alt="picture" width="150px" height="200px"> <?php
            } ?>
        
            <input type="file" name="imagen" >

            <div class="mb-3">
            <label class="form-label" for="">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value=" <?=  $_SESSION["user"] ["name"] ?> ">
            </div>
            <div class="mb-3">
            <label class="form-label" for="">Bio</label>
            <input class="form-control" type="text" name="bio" id="bio" placeholder="Bio" value="<?=  $_SESSION["user"] ["bio"] ?> ">
            </div>
            <div class="mb-3">
            <label class="form-label" for="">Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" value="<?=  $_SESSION["user"] ["phone"] ?> " >
            </div>
            <div class="mb-3">
            <label class="form-label" for="">Email</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="<?=  $_SESSION["user"] ["email"] ?>" >
            </div>
            <div class="mb-3">
            <label class="form-label" for="">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password" value="" >
            </div>
            <button class="btn btn-primary mb-3" type="submit">Save</button>

            </form>
            </div>

      
   
</div>
</body>
</html>