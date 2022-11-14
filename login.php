<?php
    include_once('config.php');
    // session_start();

    // $curr_user='abcd';
    
    $conn = mysqli_connect('localhost','root','','dbms') or die("Connection Failed :".mysqli_connect_error());

    // $curr_user='devendra';

    function gotohome(){
        echo "<script language='javascript'>";
        echo "document.location.href= 'index.php'";
        // echo "alert('No user found !!')";
        echo "</script>";
    }

    function test_input($data) {
	
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = test_input($_POST["mail"]);
        $password = test_input($_POST["pass"]);
        // echo ($username.$password);
        $query = ' SELECT `email` , `password` FROM `users` ';
        $result = mysqli_query($conn,$query);
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // print_r($array);
        $count=0;
        $temp = 0;

        
        foreach($array as $user) {
            
            if(($user['email'] == $username) && ($user['password'] == $password)) {
                    $curr_user=$username;

                    header("location: home.php");
                    // $_SESSION['superhero'] = $username;

                    // echo "Login success";
                    $count =1;
                    // return $curr_user;
                    
            }
        }

        if($count==0){
            gotohome();
            echo "<script language='javascript'>";
            echo "alert('No user found !!')";
            echo "document.location.href= 'index.php'";
            echo "</script>";
            
        }
    }
    

?>