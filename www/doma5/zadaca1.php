<?php
    $host = "localhost";
    $username = "mitko";
    $password = "1234";
    $database = "vtora_baza";
    
    $connect = mysqli_connect($host, $username, $password, $database);
    
    if (mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_error($connect));
    }
    echo "Successfully connected to the database. <br>";
    
    // ZADACA 1
    $ime = "Michael";
    $prezime = "Jackson";
    
    for($i = 1; $i <= 10; $i++){
        $sql = "INSERT INTO korisnici (ime, prezime) VALUES ('$ime$i', '$prezime')";
        $result = mysqli_query($connect, $sql);
    }
    if($result === true){
        echo "Accounts added to our database";
    }
    else{
        echo "Something is wrong, check statements";
    }
    
    mysqli_close($connect);
    
?>

