<?php
    for($broj = 2;$broj <=20;$broj = $broj + 2){
        echo $broj . "<br>";
    }
?>

<?php
    $facebook = 1;
    while($facebook <= 15){
        echo $facebook . "<br>";
        $facebook = $facebook + 2;
    }
?>

<?php
    $name = 1;
    do{
        echo "Hello World" . "<br>";
        $name++;
    }
    while($name <= 10);
?>

<?php
    
    $jamba = array();
    for($facebook = 1;$facebook <= 10;$facebook++){
        $jamba[] = $facebook;
    }
    foreach($jamba as $value){
        echo $value . "<br>";
    }
    
?>

<?php
    $niza = array();
        for($i = 2; $i <= 100; $i = $i + 2){
            $niza[] = $i;
        }
        for($i = 1; $i <= count($niza)-1; $i = $i + 2){
            echo $niza[$i] . "<br>";
        }
?>

<?php
    $broj = array();
    for($i = 2;$i <= 100;$i = $i + 2){
        $broj[] = $i;
    }
    
    for($i = 1; $i <= count($niza)-1; $i = $i + 2){
        echo $niza[$i] . "<br>";
    }
?>

<?php
    $name = array( "J" => "Jambita", "M" => "Michael", "W" => "Wake");
    foreach($name as $key => $value){
        echo $key . ": " . $value . "<br>"; 
    }
?>

<?php
    $broj = 50;
    while($broj >= 10){
        echo $broj . "<br>";
        $broj--;
    }
?>

<?php
    $welcome = "Hello guys I'm the best of the best";
    echo str_word_count($welcome);
?>

<hr/>

<?php
    $jamba = array( 1, 3, 5);
    $michael = array( 2, 4, 6);
    
    for($i = 0; $i < count($jamba);$i++){
        $michael[] = $jamba[$i];
    }
    var_dump($michael);
?>

<?php
    $macedonia = array(
        "grad" => array( "oh" => "Ohrid", "bt" => "Bitola", "sk" => "Skopje"),
        
    );
?>
