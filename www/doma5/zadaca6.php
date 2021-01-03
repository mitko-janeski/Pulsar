<?php
    $host = "localhost";
    $username = "mitko";
    $pass = "1234";
    $db = "vtora_baza";
    
    $con = mysqli_connect($host, $username, $pass, $db);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_error($con));
    }
    echo "Connected <br>";
    
    
    $sql = "UPDATE korisnici_2 SET prezime = 'HELLO', godini = 18 LIMIT 10";
    $rezultat = mysqli_query($con, $sql);
    
    if($rezultat === true){
        echo "Uspesno azurirani poslednite 10 korisnici";
    }
    else{
        echo "Greska vo settings";
    }
    
    
    mysqli_close($con);
?>

