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