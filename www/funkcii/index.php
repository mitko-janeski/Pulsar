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
            function zdravo($vrednost){
                return $vrednost;
            }
            $test = "Emrah";
            
            for($i=1;$i <=10;$i++){
                echo zdravo($test) . "<br>";
            }
        ?>
        
        <hr/>
        
        <?php
            function zdravo2($vrednost){
                for($i = 0;$i < 10;$i++){
                    echo $vrednost . "<br>";
                }
            }
            $test = "Emrah";
            zdravo2($test);
        ?>
        
        <hr/>
        
        <?php
            function zdravo3($vrednost){
                for($i = 0;$i < 10;$i++){
                    echo $vrednost . "<br>";
                }
            }
            $test = "Emrah";
            zdravo3($test);
        ?>
        
        <hr/>
        
        <?php
            function zdravo4($vrednost, $k){
                for($i = 0;$i < $k;$i++){
                    echo $vrednost . "<br>";
                }
            }
            $test = "Emrah";
            zdravo4($test, 3);
        ?>
        
        <hr/>
        
        <?php
            function pecati($vrednost){
                return $vrednost . "<br>";
            }
            
            function zdravo5($vrednost){
                echo pecati($vrednost);
            }
            
            $test = "mitko";
            
            for($b = 1;$b <= 10;$b++){
                zdravo5($test);
            }
        ?>
        
        <hr/>
        
        <?php
            function niza(){
                $niza = array();
                for($i = 1;$i <= 10;$i++){
                    $niza[] = $i;
                }
                return $niza;
            }
            function vtoraFunkcija($niza){
                $niza[] = "Emrah";
                return $niza;
            }
            var_dump(vtoraFunkcija(($niza)));
        ?>
        
        <hr/>
        
        <?php
            
            function niza3(){
                $niza = array();
                for($i = 1;$i <= 10;$i++){
                    $niza[] = $i;
                }
                return $niza2;
            }
            function vtoraFuncija($niza){
                $niza[] = "Emrah";
                return $niza;
            }
            var_dump(vtoraFuncija(niza3()));
        ?>
    </body>
</html>
