<?php
   for($adam = 9; $adam >= 3; $adam = $adam - 3){
       echo $adam . " Hello World<br/>";
   }
?>

<?php
    $adam = 9;
    while($adam >= 3) {
        echo $adam . " Hello World<br/>";
        $adam=$adam-3;
    }
?>

<?php
    $a = 3;
    while($a <= 9){
        echo $a. "Hello world<br/>";
        $a = $a + 3;
    }
?>

<hr />

<?php
    for ($a = 1; $a <= 10; $a++){
        echo "2 * $a = " . (2*$a) . "<br/>";
        
    }
?>

<hr />

<?php
    $a = 1;
    while($a <= 10){
        echo "2 * $a = " . (2*$a) . "<br/>";
        $a++;
    }
?>
<hr/>
<?php
    $a = 1;
    do{
        echo "2 * $a = " . (2*$a) . "<br/>";
        $a++;
    }
    while($a <= 10);
?>

<hr/>

<?php
    for($i = 1; $i <= 10; $i++){
        echo "2 * $i = " . (2*$i) . " ___ $i * 2 = " . ($i*2)."<br/>";
    }
?>

<hr/>

<?php
$array = array( "Prvi" => "Goran", "Vtori" => "Vasko", "Treti" => "Mitko", "Cetvrti" => "Vladimir", "Petti" => "Goce" );
var_dump($array);
foreach($array as $key => $value){
    if($key == 3){
        break;
    }
    echo $key . " => " . $value . "<br/>";
}
?>