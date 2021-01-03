<?php
    if( isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if( !empty($username) && !empty($password)){
            if( strlen($username) >= 5 && strlen($password) >= 5){
                $host ="localhost";
                $dbuser ="mitko";
                $dbpass ="1234";
                $db = "clans";
                
                $connection = mysqli_connect($host, $dbuser, $dbpass, $db);
                if(mysqli_connect_errno()){
                    die("Problem in database" . mysqli_connect_error($connection));
                }
                
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = mysqli_query($connection, $query);
                
                $user = mysqli_fetch_assoc($result);
                
                // DA SE OBJASNI OVAJ DEL
                if( !is_null($user)){
                    session_start();
                    $_SESSION['user'] = $user;
                    header("location: index.php");
                }
                else{
                    header("location: login.php?greska=4");
                }
                mysqli_close($connection);
            }
            else{
                header("location: login.php?greska=3");
            }
        }
        else{
            header("location: login.php?greska=2");
        }
    }
    else{
        header("location: login.php?greska=1");
    }
?>

