<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if( !empty($username) && !empty($password)){
            if(strlen($username) >= 5 && strlen($password) >=5){
                $host = "localhost";
                $dbuser = "mitko";
                $dbpass = "1234";
                $database = "zadaci";
                
                $connection = mysqli_connect($host, $dbuser, $dbpass, $database);
                
                $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
                $query = mysqli_query($connection, $sql);
                
                $user = mysqli_fetch_assoc($query);
                if( !is_null($user)){
                    session_start();
                    $_SESSION['user'] = $user;
                    header("location: index1.php");
                }
                else{
                    header("location: login1.php?greska=1");
                    
                }
            }
            else{
                echo "username ili password mora da bidat poveke od 5 karakteri";
            }
        }
        else{
            echo "Username ili password e zadolzitelno";
        }
    }
    else{
        echo "Ne se setirani site polinja";
    }
?>
