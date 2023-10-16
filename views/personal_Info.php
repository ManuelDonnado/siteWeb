<?php 
session_start();
    if (!isset($_SESSION["user"])){
        header("location: ../index.php");
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/personal_info.css">
</head>
<body>


<div class="container" >
    <div class="user-menu">
        <div class="img-menu" >
    <?php  
        if (empty ($_SESSION["user"] ["photo"])){
            ?>  <img src="../assets/perfildefault.jpg" alt="imagen" height="50" width="50"> 
          <?php     
        }  else{
            $img = base64_encode($_SESSION["user"] ["photo"]);
          //echo "<img src='data:image/jpg;base64,$img' alt='picture' height='100' width='100' >";
            ?> <img id="profile" class="img-account-profile rounded-circle mb-2" src="data:<?= $_SESSION["user"] ["type_img"];?>;base64,<?= base64_encode($_SESSION["user"] ["photo"]);?>" alt="picture" width="50px" height="50px"> <?php
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
        <div><h2 >Personal info </h2>
             <h3>Basic info, like your name and photo</h3>       
        </div>
        <div></div>
    </div>

<table class="table">
    <tr>
        <div class="headTab">
        <td>
                <h2>
                    Profile
                </h2>
                <h3>
                    Some info may be visible to other people
                </h3>
        </td>
        <td>
            <button class="edit" ><a href="../views/editar_Info.php">Editar</a> </button>
        </td>
        </div>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr> 

        <td>
            <h3 class="tInfo"> Photo: </h3>
          
        </td>
        <td>

        <?php  
        if (empty ($_SESSION["user"] ["photo"])){
            ?>  <img src="../assets/perfildefault.jpg" alt="imagen" height="150" width="200"> 
          <?php     
        }  else{
            $img = base64_encode($_SESSION["user"] ["photo"]);
          //echo "<img src='data:image/jpg;base64,$img' alt='picture' height='100' width='100' >";
            ?> <img id="profile" class="img-account-profile rounded-circle mb-2" src="data:<?= $_SESSION["user"] ["type_img"];?>;base64,<?= base64_encode($_SESSION["user"] ["photo"]);?>" alt="picture" width="150px" height="200px"> <?php
        } ?>
        
      
        </td>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr>
        <td>
            <h3 class="tInfo" > Name: </h3>
        </td>
        <td>
           <label  class="showInf" for=""> <?=  $_SESSION["user"] ["name"] ?> </label>
        </td>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr>
        <td>
            <h3 class="tInfo"> Bio: </h3>
        </td>
        <td>
           <label class="showInf" for=""> <?=  $_SESSION["user"] ["bio"] ?>  </label>
        </td>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr>
        <td>
            <h3 class="tInfo"> Phone: </h3>
        </td>
        <td>
           <label class="showInf" for=""> <?=  $_SESSION["user"] ["phone"] ?> </label>
        </td>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr>
        <td>
            <h3 class="tInfo"> Email: </h3>
        </td>
        <td>
           <label class="showInf" for=""> <?=  $_SESSION["user"] ["email"] ?>  </label>
        </td>
    </tr>
    <th colspan="2" scope="col" ></th>
    <tr>
        <td>
            <h3 class="tInfo"> Password: </h3>
        </td>
        <td>
       
        

           <label class="showInf" for=""> *********** </label>
        </td>
    </tr>
   


</table>

</div>

<div class="footer">
    <div > 
    <h4>create by ManuelDonado</h4>
    </div>
    <div> 
    <h4>devChanges.io</h4>
    </div>
</div>

    
</body>
</html>