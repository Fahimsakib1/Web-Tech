<?php 

$id = filter_input(INPUT_POST,'id');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'pwd');
$email = filter_input(INPUT_POST,'email');
$dob = filter_input(INPUT_POST,'dob');

if(!empty($id))

{

	    if (!empty($username))

	    {
             
                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "database2";


					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in db connection: " . $conn -> connect_error);
						}

					else 

					{
							echo "<h3>Db connection successful.</h3>";
							


					    $sql = "INSERT INTO userinfo (ID,fullName,userPassword,Email,DOB) values ('$id','$username','$password','$email','$dob')";

                        if ($conn->query($sql))

                        {

                        	echo " New Record Added Successfully";

						    $sql = "SELECT ID,fullName,userPassword,Email,DOB FROM userinfo"; // Query
							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							echo "<h2>Database Results </h2>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */

                             echo "<br>";
                             echo " ID = " . $row['ID'];
                             echo "<br>";
                             echo " Full Name = " . $row['fullName'];
                             echo "<br>";
                             echo "  Password= " . $row['userPassword'];
                             echo "<br>";
                             echo "  Email = " . $row['Email'];
                             echo "<br>";
                             echo "  DOB = " . $row['DOB'];
                             echo "<br>";

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<p>Result is zero</p>";
								}

							
                        }

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

                           }





                           $conn->close();

                    }
                        


	    }



           else
           {

           	echo " User Name must be filled";
           	die();
           }



}


else

{

	echo " User ID Must be filled";
	die();
}



 ?>



 <br><br>

 <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">

 <!-- <input style="color:green; font-size:17px; font-weight: bold" type="submit" name="submit1" value="Update Information" action="Update.php">

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<input style="color:red; font-size:17px; font-weight: bold" type="submit" name="submit2" value="Delete Information" > -->


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='Update.php'">Update Information</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


<button style="color:red; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='Delete.php'">Delete Information</button>
&nbsp

</table>

<div>




	

	

