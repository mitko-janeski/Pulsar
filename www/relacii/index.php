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
            $username = "mitko";
            $password = "1234";
            $db = "relacii";
            
            $con = mysqli_connect($host, $username, $password, $db);
            
            if(mysqli_connect_errno()){
                die("Greska pri konekcija") . mysqli_connect_error($con);
            }
            echo "Uspesno se logiravte <br>";
            
            $sql = "SELECT * FROM korisnici";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo $row['ime'] . "<br>";
                $sql2 = "SELECT * FROM telefoni WHERE korisnik_id=" .$row['korisnik_id'];
                
                $result2 = mysqli_query($con, $sql2);
                while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                    echo "&nbsp;" . $row2['telefon'] . "<br>";
                }
            }
            
            mysqli_close($con);
        ?>
    </body>
</html>
