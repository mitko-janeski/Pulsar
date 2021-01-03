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
        
        <hr />
        
        <?php
            $donate = array ( 10, 20, 30, 40, 50, 100, 500, 1000);
            $poeni = array ( "10 Points", "21 Points", "32 Points", "43 Points", "108 Points", "545 Points", "1200 Points");
            $popust = array ( 20 => false, "namalenie" => array(
                10 => 15, 16 => 20, 100 => "20%"));
            $useri = array ( "Jambita" => array(
                "age" => 28, "state" => "Macedonia", "status" => false), 
                "Michael" => array(
                    "age" => 30, "state" => "USA", "status" => "zenet")
                )
            ;
            $shop = array_merge ($donate, $poeni, $popust, $useri);
            
            if ($useri["Michael"]["age"] > 20 && $useri["Jambita"]["age"] == 28){
                if($useri["Jambita"]["status"] == false){
                    echo $useri["Michael"]["state"] . " - " . $donate[4] . " - " . $poeni[3] . " - " . $popust['namalenie'][100];
                }
            }
            
            else{
                echo "ERROR";
            }
            var_dump($shop);
        ?>
        <hr />
        <?php
            $number1 = array ( 1, 2, 3, 4, 5 );
            $number2 = array ( "michael" => "william", "jason" => "jackson", "wake" => "wave", "leon" => "leo");
            $number1[4] = 96;
            $number12 = array_merge ($number1, $number2);
            var_dump($number12);
            echo $number12[4] . " - " . $number12["michael"] . $number1[0];
            
        ?>
        
        <hr />
        
        <?php
            $id = array ( "Jonny" => array(
                "age" => 19, "name" => "Jon", "city" => "Ohio"
            ), "Michael" => array (
                "age" => 24, "name" => "Mitko", "city" => "Ohrid"
            ), "Jambita" => array(
                "age" => 25, "name" => "Ljupco", "city" => "Bitola"
            )
            );
           
            var_dump($id);
            
            if ($id["Jonny"]["age"] == 19 && $id["Jambita"]["age"] == 25 || $id[Jambita]["city"] == "Bitola"){
                echo $id["Michael"]["name"];
            }
            else {
                echo $id["Jambita"]["city"] . " - " . $id["Michael"];
            }
        ?>
        
        <hr />
        
        <?php
            $points = array ( "Donate", "Spins", "Lottery", "Loyalty");
            $points[1] = "Adam";
            var_dump($points);
            echo $points[2] . " " . $points[3];
        ?>
        
        <hr />
        
        <?php
            $calendar = array ( "January", "February", "March", "April", "May", "June", "July", "August");
            var_dump ($calendar);
            if (isset ($calendar[5]) && !is_null($calendar[6])){
                echo "Server Crashed";
            }
            else {
                echo "Server out of memory";
            }
            echo $calendar[5];
        ?>
        
        <br />
        
        <?php
            $numbers = array ( "January", "February", "April", "March", "September" );
            var_dump($numbers);
            
            $numbers[10] = 15;
            
            if (isset ($numbers[10]) && !is_null($numbers[10])){
                echo "Vlegov";
            }
            else {
                echo "Izlegov";
            }
            
            
            echo "<hr />";
            
            $numbers = array ( "ime" => "Emrah", "prezime" => "Mehmedov" );
            
            $numbers["godini"] = 18;
            var_dump($numbers);
            echo $numbers["ime"];
            
            
            echo "<hr />";
            
            $numbers = array ( "ime" => "Emrah", "prezime" => "Mehmedov" );
            $novaNiza = array ( "city" => "Ohrid", "state" => "Macedonia" );
            
            $grand = array_merge($numbers, $novaNiza);
            asort ($grand);
            var_dump($grand);
            echo $grand["ime"] . " " . $grand["state"];
        ?>
    </body>
</html>
