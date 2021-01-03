<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if( !empty($username) && !empty($password)){
            if( strlen($username) >=5 && strlen($password) >= 5 ){
                
                
                $link = mysqli_connect("localhost", "root", "", "adresar");
                
                // ESCAPING CHARACTERS
                $username = mysqli_real_escape_string($link, $username);
                $password = mysqli_real_escape_string($link, $password);
                
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            
                $result = mysqli_query($link, $query);
                $user = mysqli_fetch_assoc($result);
                
                if( !is_null($user)){
                    
                    session_start();
                    $_SESSION['user'] = $user;
                    header("location: index.php");
                }
                else{
                    // header("location: login.php?greska=3");
                }
                
            }
            else{
                header("location: login.php?greska=2");
            }
        }
        else{
            header("location: login.php?greska=1");
        }
    }
    else{
        echo "ne vnesivte potrebni informacii";
    }
?>

