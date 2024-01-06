<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forget.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Forget Password</title>
</head>

<body>
    <a href="index.php"><img src="images/logo1.png" alt="no logo found"></a>
    <center>
        <p class="booking_heading">RESET PASSWORD</p>
        <hr><br><br><br>
        <form action="forget.php" method="POST">
            <label>Enter Current Password</label><br>
            <input type="password" name="a" class="curr_pass" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/" title="Password should contain atleast oone uppercase, one lower case, one special character and should be minimum 8 digit length"><br><br><br>

            <label>Enter New Password</label><br>
            <input type="password" name="b" class="new_pass" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/" title="Password should contain atleast oone uppercase, one lower case, one special character and should be minimum 8 digit length"><br><br><br>

            <label>Confirm New Password</label><br>
            <input type="password" name="c" class="con_pass" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/" title="Password should contain atleast oone uppercase, one lower case, one special character and should be minimum 8 digit length"><br><br><br>

            <input type="submit" value="Reset Pssword" name="submit" class="submit"><br><br>
        </form>
    </center>
    <a href="LogInPage.php" class="go_back" style="color: #F9D342;">Go Back To Log In Page <<<</a>
</body>
<?php
if (isset($_POST['submit'])) {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jcomp';

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        echo "Sorry Please try later";
    } else {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if ($b == $c) {
            $query = "UPDATE signup SET Password='$b' WHERE Password='$a'";
            if (mysqli_query($conn, $query)) {
                echo "<center>";
                echo "<p style='font-style:40px; color: #82CD47'>Successfuly Changed The Password</p>";
                echo "</center";
            } else {
                echo "<center>";
                echo "<p style='font-size: 30px; color: red'>Sorry Please Try Again Later</p>";
                echo "</center";
            }
        }
    }
}
?>

</html>