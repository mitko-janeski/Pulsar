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
            $username = "root";
            $password = "";
            $database = "prva_baza";
            
            $con = mysqli_connect($host, $username, $password, $database);
            
            if(mysqli_connect_errno()){
                die("Greska pri konekcija" . mysqli_error($con));
            }
            
            echo "Uspesno se povrzavme do bazata <br>";
            
            $sql = "SELECT * FROM korisnici WHERE korisnici_id > 5";
            $rezultat = mysqli_query($con, $sql);
            while($element = mysqli_fetch_array($rezultat, MYSQLI_ASSOC)){
                echo $element['ime'] . "<br>";
            }
            mysqli_close($con);
        ?>
        
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "prva_baza";
            
            $con = mysqli_connect($host, $username, $password, $database);
            
            if(mysqli_connect_errno()){
                die("Greska pri konekcija" . mysqli_error($con));
            }
            
            
            // $sql = "DELETE FROM korisnici WHERE prezime = 'Junior'";
            //$sql1 = "INSERT INTO korisnici (ime, prezime) VALUES ('Adam', 'Junior')";
            
            $ime = "Jordan";
            $prezime = "Jackson";
            
            for( $i=0 ;$i <= 5; $i++){
                $sql2 = "INSERT INTO korisnici (ime, prezime) VALUES ('$ime $i', '$prezime')";
                $rezultat = mysqli_query($con, $sql2);
            }
            
            if($rezultat === true){
                echo "Account registered.";
            }
            else {
                echo "Please try again";
            }
            
            // DELETE EVERYTHING FROM DB
            $sql2 = "DELETE FROM korisnici";
            $rezultat = mysqli_query($con, $sql2);
            
            mysqli_close($con);
        ?>
    </body>
</html>
