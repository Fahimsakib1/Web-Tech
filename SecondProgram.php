<!DOCTYPE html>
<html>
<head>
	<title> My First PHP Program</title>
</head>

<body>
  

<h1>  PHP Interoduction </h1>
<h2>   Welcome to PHP</h2>

<?php

echo " I Am Fahim using echo key word... ";

echo " <br>";

print " I Am Fahim using print key word...";

echo " <br>";

echo " <br>";


 // For Loop

for ( $x = 0; $x<=10 ; $x++)

{
  echo " <br>";
  echo $x  ;

}


// Function

function add ( $m, $n)
{
     
     echo " <br>";

     $p;
     $p = $m + $n;

	 echo " Addtion of $m And $n is : $p";
}

echo " <br>";
add (22,15);


?>




</body>

</html>