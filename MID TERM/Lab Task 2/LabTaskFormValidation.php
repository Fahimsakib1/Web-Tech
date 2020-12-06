<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	
        $idError = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["id"])) 

			{
				  $idError = "ID is required";
			}

			else 

			{
				echo "Student ID is: " . $_REQUEST["id"];
			}

		}

        echo "<br>";


        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["name"])) 

			{
				  $nameError = "Name is required";
			}

			else 

			{
				echo "Student Name is: " . $_REQUEST["name"];
			}

		}
        echo "<br>";


        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["gender"])) 

			{
				  $gernderError = "Gender is required";
			}

			else 

			{
				echo "Gender is: " . $_REQUEST["gender"];
			}

		}
        
        echo "<br>";


        $emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["email"])) 
			{
				  $emailError = "Email is required";
			}

			else 
			{
				echo "Student Email is: " . $_REQUEST["email"];
			}

		}
        
        echo "<br>";



        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["city"])) 

			{
				  $cityError = "City is required";
			}

			else 

			{
				echo "City Name: " . $_REQUEST["city"];
			}
		}
    
        echo "<br>";


        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["state"])) 
			{
				  $stateError = "State is required";
			}

			else 
			{
				echo "State Name: " . $_REQUEST["state"];
			}

		}
    
        echo "<br>";


        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 

	  	{
			if(empty($_REQUEST["country"])) 
			{
				  $countryError = "country is required";
			}

			else 
			{
				echo "Country Name: " . $_REQUEST["country"];
			}

		}

        echo "<hr>";

	?>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


	Student ID: <br />
    <input type="text" name="id" required style=" width:300px">
    <br />
	<span><?php echo $idError; ?></span><br />


	Student Name: <br />
	<input type="text" name="name" required style=" width:300px">
	<br />
	<span><?php echo $nameError; ?></span><br />



    Gender <br/>
    <input type="checkbox" name="gender" value="male" required>Male
    <br/>
	<input type="checkbox" name="gender" value="female" required>Female
    <br/><br/>
    <span><?php echo $genderError; ?></span><br />


    Student Email: <br />
	<input type="text" name="email" value = "@" required style=" width:300px">
	<br />
	<span><?php echo $emailError; ?></span><br />


    Address <br/>
    <input type="text" name="StreetAddress"  style=" width:500px">
	<br />
	<!-- <span><?php echo $StreetAddressError; ?></span> -->
    Street Address <br />
    <br />


	<input type="text" name="AddressLine2" style=" width:500px">
	<br />
	<!-- <span><?php echo $AddressLine2Error; ?></span> -->
    Address Line 2<br />
    <br />



    <input type="text" name="city" required style=" width:300px">
	<br />
	<span><?php echo $cityError; ?></span>
    City <br />
    <br />


    <input type="text" name="state" required style=" width:300px">
	<span><?php echo $stateError; ?></span><br />
    State / Province / Region <br />
    <br /> 



    <input type="text" name="StreetAddress"  style=" width:300px">
	<br />
	<!--<span><?php echo $ZipError; ?></span> -->
    Zip / Postal Code <br />
    <br />

    
    <select name="country" id="country">
    <option value="bangladesh">Bangladesh</option>
    <option value="india">India</option>
    <option value="pakistan">Pakistan</option>
    <option value="nepal">Nepal</option>
    </select>
    <br />

	<span><?php echo $countryError; ?></span>
    Country<br />
    <br />

	<input type="submit" value="Save Form" style="color:green; font-weigt:bold">
	</form>

</body>
</html>