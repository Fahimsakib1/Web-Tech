<?php
          
$id = "";




          if (isset($_POST['delete']))

          { 
                    
                    $id = $_POST['id'];

                    
          	        $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "database2";

          	     $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

								if ($conn->connect_error)
						{

			             die("Connection failed: " . $conn->connect_error);

			            }

							

							$sql = "DELETE FROM userinfo WHERE ID='".$id."'";

							
        
				            if ($conn->query($sql) === TRUE) 

				            {

				            echo "<h2> The Record Has Been Deleted </h2>";
				          
				            } 

				            else

				             {
				            echo "Record has not been deleted :  " . $conn->error;
				            }
				        
				            $conn->close();

					
          }


?>