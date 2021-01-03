<?php
    $host = "localhost";
    $username = "mitko";
    $pass = "1234";
    $db = "vtora_baza";
    
    $konekcija = mysqli_connect($host, $username, $pass, $db);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_connect_error($konekcija));
    }
    echo "Uspesno Konektirani <br>";
    
    $ime = "Julius";
    $prezime = "Svavarson";
    
    for($i = 1; $i <= 10; $i++){
        $a = mt_rand(1903,2015);
        $sql = "INSERT INTO korisnici_2 (ime, prezime, godini) VALUES ('$ime', '$prezime', '$a')";
        $proba = mysqli_query($konekcija, $sql);
        
    }
    if ($proba === true){
        echo "10 Accounts created with random year<br>";
    }
    else {
        echo "Error";
    }
    
    mysqli_close($konekcija);
?>

