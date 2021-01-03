<?php
    $host = "localhost";
    $username = "mitko";
    $pass = "1234";
    $db = "vtora_baza";
    
    $con = mysqli_connect($host, $username, $pass, $db);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija");
    }
    echo "Uspesno se najavivte <br>";
    
    $name = "Elizabeta";
    $prezime = "Janeska";
    
    
    $insert = "INSERT INTO korisnici (ime, prezime) VALUES ('$name', '$prezime')";
    $delete = "DELETE FROM korisnici WHERE ime = '$name'";
    
    $rezultat = mysqli_query($con, $insert);
    $clean = mysqli_query($con, $delete);
    
    if($rezultat && $clean === true){
        echo "Account registered and deleted successfully";
    }
    else{
        echo "ERROR IN CODE";
    }
    
    
    mysqli_close($con);
?>

