<?php 



	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(empty($_REQUEST["id"])) // Name Attribute
		{
			echo "User ID is empty";
			echo "<br>";		
		}
		else 

		{
			echo "User ID is: " . $_REQUEST["id"];
			echo "<br>";
		}



		if(empty($_REQUEST["username"])) 
		{
			echo "User Name is empty";
			echo "<br>";		
		}
		else 
			
		{
			echo "User Name is: " . $_REQUEST["username"];
			echo "<br>";
		}



		if(empty($_REQUEST["password"])) 
		{
			echo "Password is empty";	
			echo "<br>";	
		}
		else 
			
		{
			echo "Password: " . $_REQUEST["password"];
			echo "<br>";
		}


		if(empty($_REQUEST["email"])) 
		{
			echo "Email is empty";
			echo "<br>";		
		}
		else 
			
		{
			echo "Email: " . $_REQUEST["email"];
			echo "<br>";
		}


		if(empty($_REQUEST["dob"])) 
		{
			echo "Date of Birth is empty";	
			echo "<br>";	
		}
		else 
			
		{
			echo "Date Of Birth: " . $_REQUEST["dob"];
			echo "<br>";
		}

	} 

?>



<?php
          
$id = "";
$fullname = "";

$newpassword ="";
$newemail = "";
$newdob = "";



          if (isset($_POST['update']))

          { 
                    $fullname = $_POST['username'];
                    $id = $_POST['id'];

                    $newpassword = $_POST['pwd'];
                    $newemail= $_POST['email'];
                    $newdob = $_POST['dob']; 


          	        $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "database2";

          	     $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

								if ($conn->connect_error)
						{

			             die("Connection failed: " . $conn->connect_error);

			            }



							$sql = "UPDATE userinfo SET fullName='".$fullname."' , userPassword='".$newpassword."' , Email='".$newemail."' , DOB='".$newdob."'  WHERE ID='".$id."' "; 

							
        
				            if ($conn->query($sql) === TRUE) 

				            {
				            /* echo "Record Updated Successfully "; */
				            echo "<h2> Updated Information : </h2>";


				            echo " Full Name = ".$fullname;
                            echo "<br>";
				            echo " ID  = ".$id;
				            echo "<br>";
				            echo " New Password  = ".$newpassword;
				            echo "<br>";
				            echo " New Email = ".$newemail;
				            echo "<br>";
				            echo " New Death Of Birth = ".$newdob;
				             

				            } 

				            else

				             {
				            echo "Error updating record: " . $conn->error;
				            }
				        
				            $conn->close();

						
          }


?>