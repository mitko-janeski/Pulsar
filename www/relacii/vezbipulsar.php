<?php
    $host = "localhost";
    $username = "mitko";
    $password = "1234";
    $db = "zadaci";

    $con = mysqli_connect($host, $username, $password, $db);

    if(mysqli_connect_errno()){
        die("Greska pri konekcija") . mysqli_connect_error($con);
    }
    echo "Uspesno se logiravte <br>";

    $sql = "SELECT * FROM account INNER JOIN characters ON account.account_id=characters.account_id";
    $sql2 = "SELECT * FROM account INNER JOIN characters ON account.account_id=characters.account_id WHERE account_id=1";
    $sql3 = "SELECT * FROM characters INNER JOIN account ON account.account_id=characters.account_id WHERE character_name LIKE '%o' AND character_level < 57 AND character_level >15 AND username='Mitko'";
    
    
    $result = mysqli_query($con, $sql);
    
    $niza = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $ime = "";
    
    foreach($niza as $key => $value){
        if($ime != $value['username']){
            $ime = $value['username'];
            echo $ime . "<br>";
        }
        echo " - " . $value['character_name'] . "<br>";
    }
    
    mysqli_close($con);
?>