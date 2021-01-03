<?php
    $donate = array ( 10, 20, 30, 50, 100, 500, 1000);
    $city = array ( "oh" => "Ohrid", "bt" => "Bitola", "us" => "USA");
    $state = array_merge ($donate, $city);
    foreach($city as $value){
        echo $value . "<br>";
    }
?>