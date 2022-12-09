<?php

    include_once('config.php');
    // include_once('login.php');

    // Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'dbms';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database



        
    // $conn = mysqli_connect('localhost','root','','dbms') or die("Connection Failed :".mysqli_connect_error());

    function test_input($data) {
	
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function gotohome(){
        echo "<script language='javascript'>";
        echo "document.location.href= 'bookings.php'";
        // echo "alert('No user found !!')";
        echo "</script>";
    }
    // function goback(){
        // echo "<script language='javascript'>";
        // echo "document.location.href= 'create_bookings.php'";
        // echo "alert('Booking successful !!')";
        // echo "</script>";
    // }

    if($_SERVER['REQUEST_METHOD']=='POST'){
       

        if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['dod']) && isset($_POST['dor']) && isset($_POST['mode']) && isset($_POST['email']) && isset($_POST['hotel']) && isset($_POST['people'])){
            $source = test_input($_POST['source']);
            $today =  date("Y-m-d");
            $destination = test_input($_POST['destination']);
            $dod = test_input($_POST['dod']);
            $dor = test_input($_POST['dor']);
            $temp = strtotime($dod) - strtotime($dor);
            $difference = abs(round($temp / 86400));
            $mode = test_input($_POST['mode']);
            $email = test_input($_POST['email']);
            $hotel = test_input($_POST['hotel']);
            $people =test_input($_POST['people']) ;

            $sql = "INSERT INTO `bookings` (`email`,`date_book`,`date_depart`,`date_return`,`no_days`,`from`,`destination`,`people`) VALUES ('$email','$today','$dod','$dor','$difference','$source','$destination','$people')";

            // $sql = " SELECT * FROM customer_info ";
            $result = $mysqli->query($sql);

            $i=rand(1,50);
            $j=rand(51,100);

            $sql = "INSERT INTO `hotels` (`emailID`,`destination`,`hotelID`,`roomID`,`checkin`,`checkout`) VALUES ('$email','$destination','$i','$j','$dod','$dor')";

            $result = $mysqli->query($sql);


            // $query = mysqli_query($conn,$sql);
            // if($result){
                
            //     goback();
            // }
            // else{
            //     echo 'Error occured';
            // }

            if($mode == 'bus'){
                $i=rand(1,50);
                    $j=rand(51,100);
                    $sql = "INSERT INTO `bus` (`emailID`, `busID`, `seatID`, `source`, `destination`) VALUES ('$email','$i','$j','$source','$destination')";
                    // echo 'Hello';
                    $result = $mysqli->query($sql);
                // if($query){
                //     goback();
                //     }
                // else{
                //     echo 'Error occured';
                // }

            }
            elseif ($mode == 'flight') {

                    $i=rand(1,50);
                    $j=rand(51,100);
                    $sql = "INSERT INTO `flights` (`emailID`, `flightID`, `seatID`, `source`, `destination`) VALUES ('$email','$i','$j','$source','$destination')";
                    // echo 'Hello';
                    $result = $mysqli->query($sql);
                    // $query = mysqli_query($conn,$sql);
                    // if($query){
                    //     // echo "success";
                    //     goback();
                    //         }
                    // else{
                    //     echo 'Error occured';
                    // }
    
                
            }
            elseif($mode == 'train'){
                
                $i=rand(1,50);
                    $j=rand(51,100);
                    $sql = "INSERT INTO `train` (`emailID`, `trainID`, `seatID`, `source`, `destination`) VALUES ('$email','$i','$j','$source','$destination')";
                    // echo 'Hello';
                    $result = $mysqli->query($sql);
                // $query = mysqli_query($conn,$sql);
                // if($query){
                //     // echo "success";
                //     goback();
                //     }
                // else{
                //     echo 'Error occured';
                // }
            }

            if($result){
                echo "<script language='javascript'>";
                echo "alert('Booking successful !!')";
                echo "</script>";
                gotohome();
            }


            // goback();
        
        }
    }



?>