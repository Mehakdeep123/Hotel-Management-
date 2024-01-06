<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taxi.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Taxi Book</title>
    <script src="taxi.js"></script>
</head>

<body>
    <a href="index.php"><img src="images/logo1.png" alt="no logo found"></a>
    <center>
        <p class="booking_heading">Book A Taxi</p>
        <hr><br><br><br>
        <form action="taxibook.php" method="POST" enctype="multipart/form-data">

            <label for="Origin">Origin</label><br><br>
            <select name="Origin" id="Origin" required onchange="answer()">
                <option value="--------SELECT--------">- - - - - - - -SELECT- - - - - - - -</option>
                <option value="Jammu Bus Stand">Jammu Bus Stand (JBS)--Fare=₹500</option>
                <option value="Jammu Airport">Jammu Airport (IXJ)--Fare=₹1000</option>
                <option value="Jammu Railway Station">Jammu Railway Station (JAT)--Fare=₹800</option>
            </select><br><br><br>

            <label for="Upload Ticket">Upload Ticket</label><br><br>
            <input type="file" name="file" class="file" required>
            <p style="color: red;">Note: Please upload only pdf file and size should be less than 500kb</p><br><br><br>

            <input type="submit" name="submit" value="BOOK" class="submit"><br><br>

        </form>
    </center>
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
        $name = $_FILES['file']['name'];
        $type = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $size = $_FILES['file']['size'];
        $temp_loc = $_FILES['file']['tmp_name'];
        $location = "jcomp_direct/" . $name;
        $value = 1;

        if ($type != 'pdf') {
            echo "<center>";
            echo "<p style='color: red'>File Type Not Matched</p>";
            echo "</center";
            $value = 0;
        }
        if ($size > 500000) {
            echo "<center>";
            echo "<p style='color: red'>File Size Is Greater Than 500kb</p>";
            echo "</center";
            $value = 0;
        }
        if ($value == 1) {
            move_uploaded_file($temp_loc, $location);
            echo "<center>";
            echo "<p style='color: #82CD47 ; font-size: 30px;'>Taxi Booked Successfully</p>";
            echo "</center";
        }
    }
}
?>

</html>