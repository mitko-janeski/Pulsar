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
        
            // Zadaca 1 - DONE
        
            for($number = 2;$number <= 20;$number = $number + 2){
                echo $number . "<br>";
            }
            
            // Zadaca 2 - DONE
            
            $broj = 1;
            while($broj <= 15){
                echo $broj . "<br>";
                $broj = $broj + 2;
            }
            
            // Zadaca 3 - DONE
            
            $hello = 1;
            do {
                echo "Hello World" . "<br>";
                $hello++;
            }
            while($hello <= 10);
            
            // Zadaca 4 - DONE
            
            $users = array();
            for($number = 1;$number <= 10;$number++){
                $users[] = $number;
            }
            foreach($users as $value){
                echo $value . "<br>";
            }
  
            echo "<hr/>";
          
           // Zadaca 5 v3
            $niza = array();
            for($i = 2; $i <= 50; $i = $i + 2){
                $niza[] = $i;
            }
            for($i = 1; $i <= count($niza)-1; $i = $i + 2){
                echo $niza[$i] . "<br>";
            }
            
            echo "<hr/>";
            
            // Zadaca 6 - DONE
            $city = array("Oh" => "Ohrid", "Bt" => "Bitola", "Sk" => "Skopje");
            foreach($city as $key => $value){
                echo $key . ": " . $value . "<br>";
            }
            
            // Zadaca 7 - DONE
            
            $michael = 50;
            while($michael >= 10){
                echo $michael . "<br>";
                $michael--;
            }
            echo "<hr>";
            // Zadaca 8 - NEED FIX
            $recenica = "Hello & Welcome everyone !";
            $zbor = 0;
            $a = strlen($recenica);
            for($i = 0; $i < $a;$i++){
                if($recenica[$i] == " "){
                    $zbor++;
                }
               if($i == $a-1){
                   $zbor++;
               }
            }
            
           echo "Recenicata ima $zbor zborovi";
            echo "<hr>";
            // Zadaca 8 v1
            
            
            
            // Zadaca 9 - DONE
            $state = array ( "Macedonia", "USA", "Canada", "England");
            $city = array ( "Ohrid", "Alabama", "Toronto", "London");
            $country = array_merge ($state, $city);
            
            var_dump($country);
                
            // Zadaca 10
            $niza1 = array( 1, 2, 3);
            $niza2 = array( 4, 5, 6);
            for($i = 0; $i < count($niza1);$i++){
                $niza2[] = $niza1[$i];
            }
            var_dump($niza2);
            
            // Zadaca 11
        ?>
    </body>
</html>
