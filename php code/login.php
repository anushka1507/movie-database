<!DOCTYPE html>
<html lang="en" >

<body>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="index.php">
    <link rel="stylesheet" href="styles\nav.css" />
    <link rel="stylesheet" href="styles\login.css" />
    <link rel="icon" href="images/logo.png">
    <title>Panic At The movies-Login</title>
     <!--logo not working -->
    

</head>
<body>
    <div class="background">
        
    </div>
    <form action="authentication.php" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <button type="submit">Log In</button>
         <!--connect to user.html -->
    </form>

</body>

</body>
</html>