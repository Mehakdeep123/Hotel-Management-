<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="book.css">
    <script src="value.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <a href="index.php"><img src="images/logo1.png" alt="no logo found"></a>
    <!-- <br><br> -->
    <center>
        <p class="booking_heading">BOOKING</p>
        <hr>
        <p class="between">Note: Current cost of each room is ₹2000/night</p><br>
        <div class="book">
            <form class="book-form" action="book.php" method="POST">
                <div class="form-item">
                    <center><label for="No of days">No of days: </label><br>
                        <input type="number" min="1" value="1" id="no_of_days" name="a" required>
                    </center>
                </div>
                <div class="form-item">
                    <center>
                        <label for="checkin-date">Check In Date: </label><br>
                        <input type="date" id="chekin-date" required name="b">
                    </center>
                </div>
                <div class="form-item">
                    <center>
                        <label for="checkout-date">Check Out Date: </label><br>
                        <input type="date" id="chekout-date" required name="c">
                    </center>
                </div>
                <div class="form-item">
                    <center><label for="rooms">No Of Rooms: </label><br>
                        <input type="number" min="1" value="1" id="rooms" onchange="answer()" required name="d">
                    </center>
                </div>
                <div class="form-item">
                    <center><label for="adult">No Of Adults: </label><br>
                        <input type="number" min="1" value="0" id="adult" required name="e">
                    </center>
                </div>
                <div class="form-item">
                    <center><label for="children">No Of Children: </label><br>
                        <input type="number" min="0" value="0" id="children" required name="f">
                    </center>
                </div>
                <center>
                    <div>
                        <p id="value2"></p><br>
                        <input type="submit" class="submit" name="submit" value="Book Now" style="width: 20%; height: 50px; border-color: white;"><br>
                    </div>
                </center>

            </form>
            <a href="taxibook.php" class="move_forward">Want To Book A Taxi To The Hotel</a>
        </div>

    </center>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jcomp';

    $conn = mysqli_connect($host, $username, $password, $database);
    
    if (!$conn) {
        echo "Sorry Please try later";
    } else {
        if (isset($_POST['submit'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $d = $_POST['d'];
            $e = $_POST['e'];
            $f = $_POST['f'];
            $query = "INSERT INTO booking VALUES ( '$a' , '$b' , '$c' , '$d' , '$e' , '$f' )";
            if (mysqli_query($conn, $query)) {
                echo "<center>";
                echo "<p style='font-size: 30px; color: #82CD47'>Room Successfuly Booked </p>";
                echo "</center";
                
            } else {
                echo "<center>";
                echo "<p style='color: red'>Room Can not be booked. Please check the details and try again</p>";
                echo "</center";
            }
        }
    }
    ?>
</body>

</html>