<?php
    if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['firstName']) && isset($_POST['lastName'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        
        if( !empty($username) && !empty($password) && !empty($password2) && !empty($firstName) && !empty($lastName)){
            if(strlen($username) >=5 && strlen($password) >=5 && strlen($password2) >=5){
                if( $password == $password2){
                    
                    $host = "localhost";
                    $dbuser = "mitko";
                    $dbpass = "1234";
                    $database = "adresar";

                    $connect = mysqli_connect($host, $dbuser, $dbpass, $database);
                    
                    $query = "SELECT * FROM users WHERE username='$username'";
                    $result = mysqli_query($connect, $query);
                    $user = mysqli_fetch_assoc($result);
                    
                    if(is_null($user)){
                        
                        $register = "INSERT INTO users (username, password, first_name, last_name) VALUES ('$username', '$password', '$firstName', '$lastName')";
                        $sql = mysqli_query($connect, $register);
                        if($sql){
                            header("location: login.php");
                        }
                        else{
                            header("location: register.php?regerror=6");
                        }
                    }
                    else{
                        header("location: register.php?regerror=1");
                    }
                    
                }
                else{
                    header("location: register.php?regerror=2");
                }
                
            }
            else{
                header("location: register.php?regerror=3");
            }
        }
        else{
            header("location: register.php?regerror=4");
        }
    }
    else{
    header("location: register.php?regerror=5");
    }
?>

