<!DOCTYPE html>
<html>
<head>
	<title> My First PHP Program</title>

</head>

<body>
  

<h1>  PHP Interoduction </h1>
<h2>  Welcome to PHP </h2>

<?php


echo " *******************************  STARTS ******************************* ";

echo " <br>";
echo " <br>";

echo " I Am Fahim using echo key word... ";

echo " <br>";

print " I Am Fahim using print key word...";

echo " <br>";

$a = 5;

echo " Integer Value of a is : $a";

echo " <br>";

$f = 45.25;

echo " Floating Value of f is : " .$f;


// Boolean Value True for 1 

$b = True; 

echo " <br>";

echo " Boolean Value is : " .$b;

echo " <br>";
echo " <br>";


$arr = array ("val1", "val2", "val3");
var_dump($arr); // Print "val1" in index[0], "val2" in index[1], "val3" in index[2]
echo " <br>";
var_dump($a);
echo " <br>";
echo " <br>";


$arr = array(1, 2, 3, "Hello", 10.5);
var_dump($arr);  // Print int(1) in index[0], int(2) in index[1], int(3) in index[2], "Hello" in index[3], float(10.5) in index[4] 


// null variable
$n = null;
echo " <br>";
echo " <br>";

echo " Testing value of variable null is  : $n";
var_dump($n); // null variable
echo " <br>";


// Empty Variable'

$Empty; // Dont Assign any value to the Empty Variable

var_dump($Empty); 
echo " <br>";
echo " <br>";

$age = 15;


// Conditional Statements

if ($age == 10)

{

	echo " Your Age is : $age";
}

else if ($age > 12)

{

	echo " Your Age Is Greater Than 10 and Age is : $age ";
}


else

{

	echo " Wrong Inpur for Age";
}


echo " <br>";

 echo " Numbers From 1-10 are : <br>";

 // For Loop

for ( $x = 0; $x <=10 ; $x ++)

{
  echo " <br>";
  echo $x  ;

}


// Function

echo " <br>";
echo " <br>";
echo (" ----------------- Function Starts From Here ---------------------- ");

function add ( $m, $n)

{
     
     echo " <br>";

     $p;
     $p = $m + $n;

	 echo " Addtion of $m And $n is : $p";
}

echo " <br>";
add (22,15);


function mul ( $x, $y)

{
     
     echo " <br>";

     $z;
     $z = $x * $y;

	 echo " Multiplication of $x And $y is : $z";
   

}

echo " <br>";
mul (14,7);

echo " <br>";
echo " <br>";

// Switch Case

$MyAge = 25;

switch($MyAge) 

{
        case 25:
          echo "My age is :$MyAge " ;
          break;

        case 11:
          echo "My age is : $MyAge";
          break;

        case 12:
          echo "My age is : $MyAge";
          break;

        default: 
          echo " In Valid Age. What is your actual age ? ";
}

echo " <br>";
echo " <br>";
echo " <br>";


echo " *******************************  FINIHSED ******************************* ";

?>




</body>

</html>