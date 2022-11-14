<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelingo|MyBookings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mybookings.css">
</head>
<body>
    <div class="Title">
        <div class="logo"><img src="./images/logo.png" alt="logo"></div>
        <div class="heading"><h1>Travelingo</h1></div>
    </div>
    <div class="navbar">
        <ul class="menubar">
            <li class="menuitem"><a href="home.php"> Home</li></a>
            <li class="menuitem"><a href="bookings.php">Book Now</li></a>
            <li class="menuitem" ><a href="mybook.php">My Bookings</li></a>
            <li class="menuitem" ><a href="contactus.php">Contact Us</li></a>
        </ul>
    </div>
    <div class="bgground"></div>
    <div class="userdetail">
        <h1>My Bookings</h1>
        <div class="navig">
            <ul class="menubar">
                <li class="menuitem"> Hotels</li>
                <li class="menuitem">Trains</li>
                <li class="menuitem" >Buses</li>
                <li class="menuitem" >Flights</li>
                <li class="menuitem" >Download</li>
            </ul>
        </div>
        <form action="middle.php" method='post'>
        <input type="email" placeholder="Enter your email" name = "email" class="response">
        <button type="submit" class="response" onclick = "isValid()"> Submit </button>
</form>
        <div class="downloads" id="downloads" onclick="getservice(4)">
            <h2>
                Your bookings details are beign downloaded
            </h1>
        </div>
    </div>
    <script src="bookings.js"></script> -->
</body>
</html>