PHP Toets D1 Sjoerd Meijs

Exercise 1.
<?php
/* echo "Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
dicta sunt explicabo." ;*/

// for ($i= 0 ; $i< 100 ; $i++) {}
?>

Excercise 2.
<?php
$a = 1000;
$b = 1200;
$c = 1400;

echo "The sum of a,b and c is" $a + $b + $c;
?>

Excercise 3.
The variables are not set inside the function.

Excercise 4.
<?php
$testString = "Hello World";
$testString = strtolower($testString);
echo $testString;
?>

Exercise 5.
<?php
$name = "George" ;
$age = 50 ;
$male = true ;
$list = [ 1 , 2 , 5 , 8 , 9 ];

echo "Value is" gettype($name);
echo "Value is" gettype($age);
echo "Value is" gettype($male);
echo "Value is" gettype($list);
?>

Exercise 6.
<?php
$a = 5;
$b = 10;

$sum = $a + $b;
echo ($sum);

$sub = $a - $b;
echo ($sub);

$div = $a / $b;
echo ($div);

$exp = $a^$b;
echo ($exp);

 ?>

 Exercise 7.
 <?php
echo str_replace("the","That","the quick brown fox jumps over the lazy dog.");
?>

Exercise 8.
<?php
$temperature = 10;

if ($temperature <= "50") {
    echo "temperature is low";
} else {
  echo "temperature is ok";
}
?>

Exercise 9.
<?php
$cities = array("New York City", "Seoul", "Tokyo",
"Mexico City"," Shanghai", "Lagos", "Cairo", "Buenos Aires", "London"," Mumbai");
sort($cities);

$arrlength = count($cities);

for($x = 0; $x < $arrlength; $x++) {
    echo $cities[$x];
    echo ", ";
}
?>
<?php
array_push($cities,"Calcutta", "Los Angeles", "Osaka", "Beijing");
sort($cities);

$arrlength = count($cities);

for($x = 0; $x < $arrlength; $x++) {
    echo $cities[$x];
    echo ", ";
}
?>

Exercise 10.
<?php
	for ($row=1; $row <= 5; $row++) {
		echo "<tr> \n";
		for ($col=1; $col <= 5; $col++) {
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
Exercise 11.
<form method="post" action="#.php">;
<input type="text" name="width">";
<input type="text" name="height">";
</form>

<?php
$width = "width"
$height = "height"

echo "The calculated area of" $width "and" $height "is:" $width*$height;
?>
