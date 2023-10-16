

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/regitrarse.css">
    <title>Document</title>
</head>
<body>

<div class="container" >

    <div class="encabezado" >
        <div>
            <a class="back" href="../index.php"> < Back </a>
        </div>
        <div class="tittle" >
            <h1>Register</h1>
        </div>
        
    </div>


    <div class="form" >
    <form action="../models/create.php" method="post">

          
        <div class="mb-3">
            <label id="register" class="form-label" for="">  Name:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-3">
            <label id="register" class="form-label" for=""> Email: </label>
            <input class="form-control" type="text" name="email" id="email" >
        </div>
        <div class="mb-3">
            <label id="register" class="form-label" for=""> Password: </label>
            <input class="form-control" type="password" name="password" id="password" > 
        </div>


        <button class="btn btn-primary mb-3" type="submit">Sing Up</button>

    </form>
</div>

</div>
     
</body>
</html>