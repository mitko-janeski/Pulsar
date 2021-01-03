<?php
    $host = "localhost";
    $username = "mitko";
    $password = "1234";
    $database = "vtora_baza";
    
    $con = mysqli_connect($host, $username, $password, $database);
    
    if(mysqli_connect_errno()){
        
    }
    
    $ime = "Janet";
    $prezime = "Jackson";
    
    $ime2 = "Mitko";
    $prezime2 = "Janeski";
    
    $update = "INSERT INTO korisnici (ime, prezime) VALUES ('$ime', '$prezime')";
    $update1 = "UPDATE korisnici SET ime ='$ime2', prezime ='$prezime2' WHERE id = '$userid'";
    
    $status = mysqli_query($con, $update);
    
    $userid = mysqli_insert_id($con);
    $result = mysqli_query($con, $update1);
    
    echo $userid ;
    if($status && $result){
        echo "Account inserted and updated successfully.";
    }
    else{
        echo "TERROR";
    }
    mysqli_close($con);
?>

