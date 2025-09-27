
<?php

$a = 10;
$b = 5;

echo "<h1>Arithmetic Operators</h1>";

echo "Addition: $a + $b = ".$a+ $b."<br>";
echo "Subtraction: $a - $b = ".$a - $b."<br>"; 
echo "Multiplication: $a * $b = ".$a * $b."<br>"; 
echo "Division: $a / $b = ".$a / $b."<br>"; 
echo "Modulus: $a % $b = ".$a % $b."<br>"; 

echo "<hr><br>";

echo "<h1>Comparison Operators</h1>";

//equal
echo var_dump($a == $b)."<br>";

//not equal
echo var_dump($a != $b)."<br>";

//greater than
echo var_dump($a > $b)."<br>";

//less than
echo var_dump($a < $b)."<br>";

//greater than or equal to
echo var_dump($a >= $b)."<br>";

//less than or equal to
echo var_dump($a <= $b)."<br>";

echo "<hr><br>";

echo "<h1>Logical Operators</h1>";

if ($a == 10 && $b == 5) {
    echo "Both conditions are true.<br>";
}

if ($a == 10 || $b == 10) {
    echo "At least one condition is true.<br>";
}
if (!($a == 5)) {
    echo "$a is not equal to 5.<br>";
}

?>  

