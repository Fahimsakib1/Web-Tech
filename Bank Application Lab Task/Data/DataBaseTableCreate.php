<!DOCTYPE html>
<html>
<head>
	<title> Data Base Table Create </title>
</head>

<body>

	<h1> Data Base Table Create </h1>

	<?php

	
    // Object Oriented Approach

	 $conn = new mysqli("localhost", "Fahim", "12345", "newdatabase1");

	if ($conn->connect_error)
	{
		die("Connection Failed");
	}

	else
	{

		echo " Data Base Connectoion Successfull";
		echo "<br/>";

		$CreateTableSql = "Create Table User 

		                    ( 

		                    ID Int(6) primary key, 
		                    FullName Varchar(30) not null
		                    

		                    )";

       if ($conn-> query($CreateTableSql))

       {
          echo " Table Crerated Successfully";

       }

       else

       {
       	 echo " Table Not Created "; 
       	 echo "<br/>";
       	 echo $conn->error;
          

       }

	}
	$conn -> close();

	?>



</body>
</html>