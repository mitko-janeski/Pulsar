<?php
    session_start();
        if( isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }
        else{
            header("location: login.php");
        }
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['address'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        if( !empty($firstName) && !empty($lastName) && !empty($address)){
            if( strlen($firstName) >=5 && strlen($lastName) >=5 && strlen($address) >=5){
                $host = "localhost";
                $dbuser = "mitko";
                $dbpass = "1234";
                $db = "adresar";
                
                $con = mysqli_connect($host, $dbuser, $dbpass, $db);
                $sql = "INSERT INTO contacts (first_name, last_name, address, user_id) VALUES ('$firstName', '$lastName', '$address', ". $user['user_id'] .")";
                
                $query = mysqli_query($con, $sql);
                
                if($query){
                    session_start();
                    $_SESSION['table'] = $table;
                    header("location: index.php");
                }
                else {
                    "Greska pri query";
                }
                
            }
            else{
                echo "Imeto, prezimeto ili adresata nema dovolno informacija.";
            }
        }
        else{
            echo "Nekoe od kontact polinjata e prazno";
        }
    }
    else{
        echo "Imate greska vo bazata";
    }
?>
