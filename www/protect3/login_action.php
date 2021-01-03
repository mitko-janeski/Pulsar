<?php
    if( isset($_POST['username']) && isset($_POST['password'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        if(!empty($user) && !empty($pass)){
            if(strlen($user) >= 5 && strlen($pass) >=5 ){
                $host = "localhost";
                $dbuser = "mitko";
                $dbpass = "1234";
                $db = "clans";
                
                $con = mysqli_connect($host, $dbuser, $dbpass, $db);
                $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
                
                $query = mysqli_query($con, $sql);
                $result = mysqli_fetch_assoc($query);
                
                if( !is_null($result)){
                    session_start();
                    $_SESSION['user'] = $result;
                    header("location: index.php");
                    
                }
                else {
                    echo "Username does not exist in database.";
                }
                
            }
            else{
                header("location: login.php?greska=1");
            }
        }
        else{
            echo "Ve molime vnesete username i password";
        }
    }
    else{
        echo "Nekoe od polinjata ne e validno";
    }
?>
