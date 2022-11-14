<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelingo|Bookings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bookings.css">
</head>

<body>
    <div class="bgground">
    </div>
    <div class="Title">
        <div class="logo"><img src="./images/logo.png" alt="logo"></div>
        <div class="heading">
            <h1>Travelingo</h1>
        </div>
    </div>
    <div class="navbar">
        <ul class="menubar">
            <li class="menuitem"><a href="home.php"> Home</li></a>
            <li class="menuitem"><a href="bookings.php">Book Now</li></a>
            <li class="menuitem"><a href="mybookings.php">My Bookings</li></a>
            <li class="menuitem"><a href="contactus.php">Contact Us</li></a>
        </ul>
    </div>
    <div class="Bookings" id="Bookings">
        <div class="MakeBooking" id="MakeBooking">
            <div class="title2">Make a Booking</div>
            <form action="create_bookings.php" method='post'>
            <input type="email" placeholder="Email" name = "email" class="response">
                <input type="text" placeholder="Source" name = "source" class="response">
                <input type="text" name = "destination" placeholder="Destination" class="response">
                <div class="labels">Date of Departure</div>
                <input type="date" name = "dod" class="response">
                <div class="labels">Date of Return</div>
                <input type="date" name="dor" class="response">
                <select class="selalign" name="hotel" id="Hotels">
                    <option value="none" selected disabled hidden>Hotels</option>
                    <option value="0">0star</option>
                    <option value="1">1star</option>
                    <option value="2">2star</option>
                    <option value="3">3star</option>
                    <option value="4">4star</option>
                    <option value="5">5star</option>
                    <option value="6">6star</option>
                    <option value="7">7star</option>
                </select>
                <input type="number" name = "people" placeholder="Number of people" class="response">
                <div class="labels"></div>
                <select class="selalign" name = 'mode' id="discounts">
                    <option value="none" selected disabled hidden>Mode of transport</option>
                    <option value="bus">Buses</option>
                    <option value="train">Trains</option>
                    <option value="flight">Flights</option>
                </select>
            <button type="submit" name="btn_sub" class="response" onclick = "isValid()"> Submit </button>
            </form>
        </div>
    </div>

</body>

</html>