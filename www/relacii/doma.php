<?php
    $sql = "SELECT * FROM korisnici INNER JOIN telefoni ON korisnici.korisnik_id=telefoni.korisnik_id";
    
    $result = mysqli_quert($con, $sql);
    
    $niza = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($niza as $key => $value){
        echo $key . " " . $value['ime'] . " - " . $value['telefon'] . "<br>";
    }
?>

