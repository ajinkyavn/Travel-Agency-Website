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
    function goback(){
        echo "<script language='javascript'>";
        echo "document.location.href= 'create_bookings.php'";
        // echo "alert('No user found !!')";
        echo "</script>";
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
       

        if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['dod']) && isset($_POST['dor']) && isset($_POST['mode']) ){
            $source = test_input($_POST['source']);
            $today =  date("Y-m-d");
            $destination = test_input($_POST['destination']);
            $dod = test_input($_POST['dod']);
            $dor = test_input($_POST['dor']);
            $temp = strtotime($dod) - strtotime($dor);
            $difference = abs(round($temp / 86400));
            $mode = test_input($_POST['mode']);
            $email = $curr_user;
            $people = 7;

            $sql = "INSERT INTO `bookings` (`email`,`date_book`,`date_depart`,`date_return`,`no_days`,`from`,`destination`,`people`) VALUES ('$email','$today','$dod','$dor','$difference','$source','$destination','$people')";

            // $sql = " SELECT * FROM customer_info ";
            $result = $mysqli->query($sql);


            // $query = mysqli_query($conn,$sql);
            // if($result){
                
            //     goback();
            // }
            // else{
            //     echo 'Error occured';
            // }

            if($mode == 'bus'){
                $sql = "INSERT INTO `bus` (`emailID`,`source`,`destination`) VALUES ('$email','$source','$destination')";
                // $query = mysqli_query($conn,$sql);
                $result = $mysqli->query($sql);
                // if($query){
                //     goback();
                //     }
                // else{
                //     echo 'Error occured';
                // }

            }
            elseif ($mode == 'flight') {

                
                    $sql = "INSERT INTO `flights` (`emailID`,`source`,`destination`) VALUES ('$email','$source','$destination')";
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
                $sql = "INSERT INTO `train` (`emailID`,`source`,`destination`) VALUES ('$email','$source','$destination')";
                $query = mysqli_query($conn,$sql);
                // if($query){
                //     // echo "success";
                //     goback();
                //     }
                // else{
                //     echo 'Error occured';
                // }
            }
        }
    }



?>