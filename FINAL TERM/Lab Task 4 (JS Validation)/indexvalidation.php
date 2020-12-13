<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(empty($_REQUEST["id"])) // Name Attribute
		{
			echo "User ID is empty";		
		}
		else 

		{
			echo "User ID is: " . $_REQUEST["id"];
		}



		else if(empty($_REQUEST["username"])) 
		{
			echo "User Name is empty";		
		}
		else 
			
		{
			echo "User Name is: " . $_REQUEST["username"];
		}



		else if(empty($_REQUEST["password"])) 
		{
			echo "Password is empty";		
		}
		else 
			
		{
			echo "Password: " . $_REQUEST["password"];
		}


		else if(empty($_REQUEST["email"])) 
		{
			echo "Email is empty";		
		}
		else 
			
		{
			echo "Email: " . $_REQUEST["email"];
		}


		else if(empty($_REQUEST["dob"])) 
		{
			echo "Date of Birth is empty";		
		}
		else 
			
		{
			echo "Date Of Birth: " . $_REQUEST["dob"];
		}

	} 
?>