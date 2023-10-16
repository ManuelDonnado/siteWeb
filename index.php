

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e0c81e361c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>Document</title>
</head>
<body>

<div class="container" >

    <div class="encabezado" >
        <div>
        <h3>Join thousands of learners from around the world</h3>
        </div>
        <div class="tittle" >
        <h4>Master web development by making real-life project. There are multiple paths for you to choose</h4>
        </div>
    </div>
         
    <div class="form"> 
        <form   action="./models/login.php" method="post">
        <br>
        <div class="input-container">
            <input class="form-control" type="email" name="email" placeholder="Email"> <i class="fa-solid fa-envelope"></i>
        </div>
         <br>
         <div class="input-container">
             <input class="form-control" type="password" name="password" placeholder="Password"> <i class="fa-solid fa-lock"></i>
         </div>
         <br>
        <button class="btn btn-primary mb-3" type="submit">Start coding now</button>        
        </form>
    </div> 

        <p>or continue with these social profile</p>
        <div class="menu" >
        <ul class="horizontal-menu" >
            <li><img src="./assets/Google.svg" alt=""></li>
            <li> <img src="./assets/Facebook.svg" alt=""> </li>
            <li> <img src="./assets/Twitter.svg" alt="" > </li>
            <li> <img src="./assets/Gihub.svg" alt=""></li>
        </ul>

        </div>

        <p>Adready a member? <a href="./views/registrarse.php">Create Acount</a> </p>



</div>      
    
</body>
</html>