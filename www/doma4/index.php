<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <?php
            $title = "Soulsplit #1 RSPS";
        ?>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        
        
        
        <?php
            //CONNECT START
            $host = "localhost";
            $user = "mitko";
            $password = "1234";
            $database = "prva_baza";
            
            $connect = mysqli_connect($host, $user, $password, $database);
            
            if(mysqli_connect_errno()){
                die ("Greska pri konekcija" . mysqli_error($connect));
            }
            //CONNECT ENDS
            
            //CODE HERE
            $sql = "SELECT * FROM soulsplit";
            
            $rezultat = mysqli_query($connect, $sql);
            while ($element = mysqli_fetch_array($rezultat ,MYSQLI_ASSOC)){

              echo $element['username'] . "<br>";
            }
            
            
            //CODE HERE
            
            //CLOSE CONNECTION
            mysqli_close($connect);
        ?>
    </body>
</html>
