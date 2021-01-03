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
            // Zadaca 1
            function zdravo(){
                echo "Hello World";
            }
            zdravo();
            
            echo "<br>";
            
            // Zadaca 2
            function zadaca2(){
                return "Hello World";
            }
            echo zadaca2();
            
            echo "<br>";
            
            // Zadaca 3
            function reverseString($user){
                return strrev("Hello");
            }
            $mitko = "Hello";
            echo reverseString($mitko);
            
            echo "<br>";
            
            // Zadaca 4
            function test($test1, $test2){
                
            }
            
            echo "<br>";
            
            // Zadaca 5
            function tablica1($broj){
                for($i = 4;$i <= 10;$i++){
                    echo "2 * $i" . " = " . ($broj*$i) . "<br>";         
                }
            }
            $number = 2;
            tablica1($number);
            function tablica2(){
            }
            
          
            
        ?>
        
        <hr/>
        
        <?php
            // Zadaca 1
            function hello(){
                echo "Hello World";
            }
            
            hello();
            
        ?>
        
        <hr />
        
        <?php
            // Zadaca 2
            function mitko(){
                return "Hello World";
            }
            echo mitko();
        ?>
        
        <hr />
        
        <?php
            function rever($adam){
                return strrev("$adam");
            }
            $a = "Hello";
            echo rever($a);
        ?>
        
        <hr />
        
        <?php
            function tablica($broj){
                for($i = 4;$i <= 10;$i++){
                    echo "$broj * $i =" . ($broj*$i) . "<br>";
                }
            }
            
            function tablica3($number2){
                for($x = 5; $x <= 15; $x++){
                    echo "$number2 * $x = " . ($number2 * $x) . "<br>";
                }
            }
            
            $number = 2;
            $date = 5;
            
            echo tablica($number);
            echo "<br>";
            echo tablica3($date);
        ?>
        
        <hr />
        
        <?php
        function rezerva($jovan){
            return strrev($jovan);
        }
        function povik($prezime){
            echo rezerva($prezime);
        }
        
        $name = "Mitko";
        
        echo povik($name);
        
        ?>
        
        <hr />
        
        <?php
            //Zadaca 6
            function niza(){
                $niza = array();
                $i = 0;
                
                while($i < 5){
                    $niza[] = $i + 5;
                    $i++;
                    
                }
                return $niza;
            }
            
            $array = niza();
            
            foreach($array as $key => $value){
                echo "$key: $value" . "<br>";
            }
            
        ?>
    </body>
</html>
