<?php 

$username = "root";
$password = "";
$server = 'localhost';
$db = 'bankapplication';


$conn = mysqli_connect ($server,$username,$password,$db);

if($conn)

{

	echo " Connection successful";

}

else

{

	//echo " No connection";

	die( " No connection ".mysqli_connect_error());
}


 ?>