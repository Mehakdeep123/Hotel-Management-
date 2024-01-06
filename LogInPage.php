<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/logo.png" type="image/png">
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <div class="title">
        <h1>Log In</h1><br>
    </div>
    <br><br><br>
    <center>
        <hr>
    </center>
    <div class="LogIn">
        <form class="LogIn-form" action="login.php" method="POST">

            <div class="form-item">
                <label for="Username">Username:<br> </label>
                <input type="text" id="username" name="username" >
            </div>
            <div class="form-item">
                <label for="password">Password:<br></label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-item">
                <input type="submit" class="btn" name = "submit" value="LOGIN"><br><br>
                <a href="forget.php" class="go_back" style="color: #F9D342; text-decoration: none; padding-left: 350px;">Forget Password >>>></a>
            </div>
        </form>
    </div>
</body>

</html>