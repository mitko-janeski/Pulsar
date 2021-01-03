<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proekt Promenlivi</title>
    </head>
    <body>
        <?php
            $age = 15;
            $name = "Mitko Janeski";
            $price = 15.5;
            echo $age . " " . $name . "," . $price;
            
            
            echo "<hr>";
            
            $godini = 17;
            
            if($godini >= 18){
                echo "Polnoleten";
            }
            else if($godini == 17) {
                echo "Kandidat za Polnoleten";
            }
            else {
                echo "Maloleten";
            }
            
        ?>
    </body>
</html>