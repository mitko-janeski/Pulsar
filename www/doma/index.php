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
    <h4>Variables</h4>
    <p>Zadaca 1</p>
    
    <?php
        $a = 25;
        $b = 55;
        $c = $a / $b;
        
        echo $c;
    ?>
    
    <p>Zadaca 2</p>
    
    <?php
        $a = "Hello";
        $b = "World";
        echo $a . $b;
    ?>
    
    <p>Zadaca 3</p>
    <?php
        $a = "Hello";
        $b = "World";
        echo $a . " " . $b;
    ?>
    
    <p>Zadaca 4</p>
    <?php
        $a = "Hello World from PHP World!";
        echo strlen($a);
    ?>
    
    <p>Zadaca 5</p>
    <?php
        $a = "Hello World from PHP World!";
            echo strpos ($a, 'W');
    ?>
    
    <p>Zadaca 6</p>
    <?php
        $a = NULL;
        $a = "Hello World";
        
        if (isset($a)){
            echo "true";
        }
        else {
            echo "false";
        }
    ?>
    
    <p>Zadaca 7</p>
    <?php
        $a = true;
        $b = false;
        if($a || $b == true){
            echo "false";
        }
        else {
            echo "true";
        }
    ?>
    
    <p>Zadaca 8</p>
    <?php
        $a = 123;
        $b = 123;
        $c = 2;
        echo $a + $b / $c;
    ?>
    
    <p>Zadaca 9</p>
    <?php
        $a = 5;
        $b = 2;
        $c = 10;
        if($a > 4){
            if($b + $c == 2){
                echo "false";
            }
            else {
                echo "true";
            }
        }
        else {
            echo 0;
        }
    ?>
</body>
</html>
