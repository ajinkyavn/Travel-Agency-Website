<?php 
session_start();

// include 'login.php';
include 'config.php';
// include 'middle.php';

// session_start();
// $temp = $_SESSION['superhero'];

// echo $_SESSION['superhero'] ;
$conn = mysqli_connect('localhost','root','','dbms') or die("Connection Failed :".mysqli_connect_error());

$temp = 'devendramukane@gmail.com';
if(isset($_SESSION['userName'])) {
  $temp =  $_SESSION['userName'];
}


//$email = '';
// $temp = $curr_user;

$query = ' SELECT * FROM `bus`';
        $result = mysqli_query($conn,$query);
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // print_r($array);
        $i=0;

        if(count($array)!=0){

          foreach($array as $user){
            if($user['emailID']==$temp){
              $i++;
              $email = $user['emailID'];
              $b_seat = $user['seatID'];
              $b_bus = $user['busID'];
              $b_src = $user['source'];
              $b_dest = $user['destination'];
              // echo ($email. $seat. $bus. $src. $dest);
            }
          }
        }

        if($i==0){

              $b_seat = '--';
              $b_bus ='--';
              $b_src = '--';
              $b_dest = '--';

        }

        

$query = ' SELECT * FROM `hotels` ';
        $result = mysqli_query($conn,$query);
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // print_r($array);
        $i=0;

        if(count($array)!=0){

          foreach($array as $user){
            if($user['emailID']==$temp){
              $i++;
              $email = $user['emailID'];
              $hotelID = $user['hotelID'];
              $roomID = $user['roomID'];
              $place = $user['destination'];
              $chin = $user['checkin'];
              $chou = $user['checkout'];

              // echo ($email. $hotelID. $place. $chin. $chou);
            }
          }
        }

        if($i==0){

              $hotelID = '--';
              $roomID ='--';
              $place = '--';
              $chin = '--';
              $chou = '--';


        }


$query = ' SELECT * FROM `train`';
        $result = mysqli_query($conn,$query);
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // print_r($array);
        $i=0;
        if(count($array)!=0){

          foreach($array as $user){
          
            if($user['emailID']==$temp){
              $i++;
              $email = $user['emailID'];
              $t_seat = $user['seatID'];
              $t_train = $user['trainID'];
              $t_src = $user['source'];
              $t_dest = $user['destination'];
              // echo ($email. $seat. $bus. $src. $dest);
            }
          }
        }

        if($i==0){

              $t_seat = '--';
              $t_train ='--';
              $t_src = '--';
              $t_dest = '--';

        }

        

$query = ' SELECT * FROM `flights`';
        $result = mysqli_query($conn,$query);
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // print_r($array);
        $i=0;
        if(count($array)!=0){

          foreach($array as $user){
            if($user['emailID']==$temp){
              $i++;
              $email = $user['emailID'];
              $f_seat = $user['seatID'];
              $f_flight = $user['flightID'];
              $f_src = $user['source'];
              $f_dest = $user['destination'];
              // echo ($email. $seat. $bus. $src. $dest);
            }
          }
        }

        if($i==0){

              $f_seat = '--';
              $f_flight ='--';
              $f_src = '--';
              $f_dest = '--';

        }
        



?>


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
            <li class="menuitem" ><a href="mybookings.php">My Bookings</li></a>
            <li class="menuitem" ><a href="contactus.php">Contact Us</li></a>
        </ul>
    </div>
    <div class="bgground"></div>
    <div class="userdetail">
        <h1>My Bookings</h1>
        <!-- <div class="navig">
            <ul class="menubar">
                <li class="menuitem"> Hotels</li>
                <li class="menuitem">Trains</li>
                <li class="menuitem" >Buses</li>
                <li class="menuitem" >Flights</li>
                <li class="menuitem" >Download</li>
            </ul>
        </div> -->
        <div class="hotels" id="hotels" onclick="getservice(0)">
            <table>
                <caption>Hotels</caption>
                <tr>
                    <th>Hotel ID</th>
                  <th><?php include_once('mybookings.php');echo $hotelID;?></th>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>Travelingo Hotel</td>
                </tr>
                <tr>
                  <td>Room ID</td>
                  <td><?php include_once('mybookings.php');echo $roomID;?></td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><?php include_once('mybookings.php');echo $place;?></td>
                </tr>
                <tr>
                    <td>Date of CheckIn</td>
                    <td><?php include_once('mybookings.php');echo $chin;?></td>
                </tr>
                <tr>
                  <td>Date of CheckOut</td>
                  <td><?php include_once('mybookings.php');echo $chou;?></td>
                </tr>
              </table>
            </div>
            <div class="trains" id="trains" onclick="getservice(1)">
            <table>
                <caption>Train</caption>
                <tr>
                    <th>Train ID</th>
                    <th>
                   <?php include_once('mybookings.php');echo $t_train;?> 

                    </th>
                </tr>
                <tr>
                    <td>Train Name</td>
                    <td>
                   Travelingo Train

                    </td>
                </tr>
                <tr>
                    <td>Seat ID</td>
                    <td>
                   <?php include_once('mybookings.php');echo $t_seat;?> 

                    </td>
                </tr>
                <tr>
                    <td>Source</td>
                    <td>
                   <?php include_once('mybookings.php');echo $t_src;?> 

                    </td>
                </tr>
                <tr>
                  <td>Destination</td>
                  <td>
                   <?php include_once('mybookings.php');echo $t_dest;?> 

                  </td>
                </tr>
                <!-- <tr>
                  <td>Date of Departure</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                    <td>Time of Departure</td>
                    <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Date of Arrival</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Time of Arrival</td>
                  <td>Enter from DB</td>
                </tr> -->
            </table>
        </div>
        <div class="flights" id="flights" onclick="getservice(2)">
            <table>
                <caption>Flights</caption>
                <tr>
                    <th>Flight ID</th>
                    <th>
                   <?php include_once('mybookings.php');echo $f_flight;?> 
                    </th>
                </tr>
                <tr>
                  <td>Flight Name</td>
                  <td>
                   Travelingo Flights

                  </td>
                </tr>
                <tr>
                  <td>Seat ID</td>
                  <td>
                   <?php include_once('mybookings.php');echo $f_seat;?> 

                  </td>
                </tr>
                <tr>
                  <td>Source</td>
                  <td>
                   <?php include_once('mybookings.php');echo $f_src;?> 

                  </td>
                </tr>
                <tr>
                  <td>Destination</td>
                  <td>
                   <?php include_once('mybookings.php');echo $f_dest;?> 

                  </td>
                </tr>
                <!-- <tr>
                  <td>Date of Departure</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Time of Departure</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                    <td>Date of Arrival</td>
                    <td>Enter from DB</td>
                </tr>
                <tr>
                    <td>Time of Arrival</td>
                    <td>Enter from DB</td>
                </tr> -->
            </table>
        </div>
        <div class="buses" id="buses" onclick="getservice(3)">
            <table>
                <caption>Buses</caption>
                <tr>
                  <th>Bus ID</th>
                   <th>
                   <?php include_once('mybookings.php');echo $b_bus;?> 
 
</th> 
                </tr>
                <tr>
                  <td>Bus Name</td>
                  <td>                  
                    
                  Travelingo Buses
                  </td>
                </tr>
                <tr>
                  <td>Seat ID</td>
                  <td>
                  <?php include_once('mybookings.php');echo $b_seat;?> 

                  </td>
                </tr>
                <tr>
                  <td>Source</td>
                  <td>
                  <?php include_once('mybookings.php');echo $b_src;?> 
                  </td>
                </tr>
                <tr>
                  <td>Destination</td>
                  <td>
                  <?php include_once('mybookings.php');echo $b_dest;?> 
                  </td>
                </tr>
                <!-- <tr>
                  <td>Date of Departure</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Time of Departure</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Date of Arrival</td>
                  <td>Enter from DB</td>
                </tr>
                <tr>
                  <td>Time of Arrival</td>
                  <td>Enter from DB</td>
                </tr> -->
              </table>
        </div>
        <div class="downloads" id="downloads" onclick="getservice(4)">
            <h2>
                Your bookings details are beign downloaded
            </h1>
        </div>
    </div>
    <script src="bookings.js"></script>
</body>
</html>