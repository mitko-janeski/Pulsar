<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "vtora_baza";
            
            $connection = mysqli_connect($host, $user, $password, $database);
            
            if(mysqli_connect_errno()){
                die("Greska pri konekcija" . mysqli_connect_error($connection));
            }
            echo "Uspesno se konektiravte";
            
            for($i = 1; $i <= 5; $i++){
                $sql = "INSERT INTO account (username, password) VALUES ('Mitko $i', 'zzxxcc$i')";
                mysqli_query($connection, $sql);      
            }
            
            if($sql == true){
                echo "Uspesno se kreirani 5 Accounti i Passwordi vo bazata ACCOUNTS <br>";
            }
            else{
                echo "You are fucked up";
            }
            
            for($i = 1; $i <= 10; $i++){
                $sql = "INSERT INTO account (username, password) VALUES ('Mitko $i', 'zzxxcc$i')";
                mysqli_query($connection, $sql);      
            }
            
            mysqli_close($connection);
        ?>
    </body>
</html>
