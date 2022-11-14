<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelingo|Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <style>
         body {
            background-image: url("./images/home_background.jpg")
            background-repeat : no-repeat
         }
         
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

      </style>
</head>
<body>
    <div class="Title" id = "mainlogo">
        <!-- <div class="logo"><img src="./images/logo.png" alt="logo"></div> -->
        <div class="heading" >
            <center>
            <img src = "./images/main_header.png">
            </center>
            <a href='index.php'><button id="logout">LOGOUT</button></a>
        </div>
    </div>
    <div>
    <table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Booking ID</th>
<th>Booking Date</th>
<th>Departure Date</th>
<th>Return Date</th>
<!-- <th>Source</th>
<th>Destination</th> -->


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dbms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users INNER JOIN bookings ON users.email = bookings.email";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["book_id"] . "</td><td>"
. $row["date_book"]. "</td><td>" . $row["date_depart"] . "</td><td>" . $row["date_return"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>




    </div>

   
</body>
</html>