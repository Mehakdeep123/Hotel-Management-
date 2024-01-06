<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
    <script src="C:\Users\MEHAKDEEP SINGH\Desktop\sudhanshu folder\node.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <center>
        <form action="signup.php" method="POST">
            <br>
            <p class="heading"><b>REGISTER YOURSELF</b></p>
            <hr><br>
            <input type="text" placeholder="Full Name" class="name" required name='name'><br><br>
            <input type="email" placeholder="Email" class="email" required name='email'><br><br>
            <input type="tel" placeholder="Phone" class="phone" required name='phone' min=10 max=10 pattern="[0-9]{10}" title="Please enter correct Telephone number"><br><br>
            <input type="text" placeholder="Username" class="username" required name='username'><br><br>
            <input type="password" placeholder="Password" class="password" required name='password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
            <input type="password" placeholder="Confirm Password" class="con_pass" required name='con_pass' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
            <input type="checkbox" name='check'><a href="www.google.com">I agree with the terms and conditions</a><br><br>
            <div>
                <input type="submit" value="REGISTER" class="submit" name="submit"><br><br>
                <input type="reset" value="CANCEL" class="reset">
            </div>
    </center>
    </form>
    <a href="LogInPage.php" class="next_page">Already Registered</a>
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

            $a = $_POST['name'];
            $b = $_POST['email'];
            $c = $_POST['phone'];
            $d = $_POST['username'];
            $e = $_POST['password'];
            $f = $_POST['con_pass'];

            if ($e == $f) {
                if (isset($_POST['check'])) {
                    $query = "INSERT INTO signup VALUES ( '$a' , '$b' , '$c' , '$d' , '$e' )";
                    if (mysqli_query($conn, $query)) {
                        echo "<center>";
                        echo "<p style='color: #82CD47'>Successfuly Registered</p>";
                        echo "</center";
                    }
                } else {
                    echo "<center>";
                    echo "<p style='color: red'>Please go though the terms and conditions</p>";
                    echo "</center";
                }
            } else {
                echo "<center>";
                echo "<p style='color: red'>Password and confirm password should match</p>";
                echo "</center";
            }
        }
    }

    ?>
</body>

</html>