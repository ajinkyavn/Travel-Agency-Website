<?php

    include_once('config.php');
        
    $conn = mysqli_connect('localhost','root','','dbms') or die("Connection Failed :".mysqli_connect_error());

    function test_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function gotohome(){
        echo "<script language='javascript'>";
        echo "document.location.href= 'index.php'";
        // echo "alert('No user found !!')";
        echo "</script>";
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
       

        if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phoneno']) && isset($_POST['date']) && isset($_POST['city']) && isset($_POST['pass'])){
            $name = test_input($_POST['name']);
            $email = test_input($_POST['mail']);
            $phone = test_input($_POST['phoneno']);
            $date = test_input($_POST['date']);
            $city = test_input($_POST['city']);
            $password = test_input($_POST['pass']);

            $sql = "INSERT INTO `users` (`name`,`email`,`password`,`phone`,`dob`,`city`) VALUES ('$name','$email','$password','$phone','$date','$city')";


            $query = mysqli_query($conn,$sql);
            if($query){
                echo "<script language='javascript'>";
                echo "alert('Account created. Login to your account  !!')";
                echo "</script>";
                gotohome();

                // header("location : temp.php");
            }
        }
    }



?>