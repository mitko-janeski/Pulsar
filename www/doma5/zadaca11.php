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
    
    $niza = array();
    for($i = 0; $i < 10;$i++){
        $number = rand(100, 1000);
        $niza[] = $number;
    }
    foreach($niza as $key => $value){
        $sql = "INSERT INTO korisnici_2 (ime, prezime) VALUES ('Mitko', '$value')";
        mysqli_query($connect, $sql);
    }
    
    
    
    mysqli_close($connect);
?>

