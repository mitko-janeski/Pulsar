<?php
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password))
        {
            if(strlen($username) >=5 && strlen($password) >=5)
            {
                $host = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "forums";
                
                $connect = mysqli_connect($host, $dbuser, $dbpass, $db);
                if(mysqli_connect_errno()){
                    die("There's an error with database information" . mysqli_connect_error($connection));
                }
                
                $username = mysqli_real_escape_string($connect, $username);
                $password = mysqli_real_escape_string($connect, $password);
                
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                
                $login = mysqli_query($connect, $sql);
                $users = mysqli_fetch_assoc($login);
                
                if( !is_null($users))
                {
                    session_start();
                    $_SESSION['user'] = $users;
                    header("location: index.php");
                }
                else
                {
                    header("location: login.php?logerror=3");
                }
                
            }
            else
            {
                header("location: login.php?logerror=2");
            }
        }
        else
        {
            header("location: login.php?logerror=1");
        }
    }
    else
    {
        echo "Username and password are not submitted correctly";
    }
?>