<?php
    $host = "localhost";
    $name = "mitko";
    $pass = "1234";
    $database = "vtora_baza";
    
    $connection = mysqli_connect($host, $name, $pass, $database);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_connect_error($connection));
    }
    echo "Uspesno Konektirani <br>";
    
    $niza = array();
    for($i = 0; $i < 15;$i++){
        $niza[] = array('ime' => "Emrah", 'prezime' => 'Mehmedov');
    }
    
    for($i = 0;$i < count($niza); $i++){
        $sql = "INSERT INTO korisnici (ime, prezime) VALUES ('". $niza[$i]['ime'] ."', '". $niza[$i]['prezime'] ."')";
        mysqli_query($connect, $sql);
    }
    
    var_dump($niza);
    mysqli_close($connection);
?>
