<?php
    $host = "localhost";
    $username = "mitko";
    $password = "1234";
    $db = "relacii";

    $con = mysqli_connect($host, $username, $password, $db);

    if(mysqli_connect_errno()){
        die("Greska pri konekcija") . mysqli_connect_error($con);
    }
    echo "Uspesno se logiravte <br>";
    
    //$sql = "SELECT * FROM country INNER JOIN c2l ON country.country_id=c2l.country_id INNER JOIN languages ON c2l.lang_id=languages.language_id WHERE country.country_id=1";
    
    $sql = "SELECT * FROM country INNER JOIN c2l ON country.country_id=c2l.country_id INNER JOIN languages ON c2l.lang_id=languages.language_id WHERE languages.language_id = 1";
    
    
    $result = mysqli_query($con, $sql);
    
    $niza = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    foreach($niza as $value){
        
        echo $value['country_name'] . " - " . $value['language_name'] . "<br>";
    }
    
    mysqli_close($con);
?>
