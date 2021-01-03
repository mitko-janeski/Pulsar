<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "vtora_baza";
    
    $connection = mysqli_connect($host, $username, $password, $database);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_error($connection));
    }
    echo "Successfully connect <br>";
    
    $delete = "DELETE FROM korisnici";
    $query = mysqli_query($connection, $delete);
    
    if($query === true){
        echo "Accounts successfully deleted.";
    }
    else{
        echo "Something's wrong, Please try again.";
    }
    
    
    mysqli_close($connection);
?>

