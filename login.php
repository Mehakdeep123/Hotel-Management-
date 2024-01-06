<?php
if (isset($_POST['submit'])) {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jcomp';

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        echo "<p style='color:red;'>Sorry Please try later</p>";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM signup WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo '<script type="text/JavaScript">window.alert("Successfully Logged In");</script>';
            
            header('Location: book.php');

        }
        else{
            header('Location: LogInPage.php');
            echo '<script type="text/JavaScript">prompt("Wrong Credentials");</script>';
            
        }
    }
}
?>
