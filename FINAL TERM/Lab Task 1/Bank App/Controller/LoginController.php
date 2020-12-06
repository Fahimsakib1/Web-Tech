<?php

			require('../Data/DataBaseConnection.php');




			$name = $pwd= $id = "";
			$nameErr= $pwdErr= $idErr=""; 


			//$name = $pwd=  "";
			//$nameErr= $pwdErr= ""; 




			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				
				 

				if (empty($_POST["id"])) 

			  	{
			  		$idErr = "ID is required";
			  	}

			  	else
			  	{
			  		$id = test_input($_POST["id"]);

			  	}

			  	

				if (empty($_POST["name"])) 
			  	{
			  		$nameErr = "Name is Required";
			  	}

			  	else
			  	{
			  		$name = test_input($_POST["name"]);

			  		if (strlen($name)<3) 

			  		{
	      				$nameErr = "Name Must be greater then 3 letters";
	      				$pwd = "";
	    			}
			  
			  	}

			  	if (empty($_POST["pwd"])) 

			  	{
			  		$pwdErr = "Password is required";
			  	}

			  	else
			  	{
			  		$pwd = test_input($_POST["pwd"]);

			  		
	    			
			  	}
		  	}


			function test_input($data) 

			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}


            if( !empty($_POST["name"]) && !empty($_POST["pwd"]) && !empty($_POST["id"]))

           {

                        /* if ( $name == '' && $pwd == '' )

                       {

                          header('Location: ../View/HomePage.php');
                          //exit;

                       }
                      
                        else
                    	
                        {
                        	header('Location: ../View/LoginFailed.php');
                             exit;
                        }
                        */

                        //echo  "ID : " $id;
                        //echo "Password :" $pwd;

                        $flag = loginCheck($id, $pwd);

                        if ($flag)

                        {

                        	header('Location: ../View/HomePage.php');
                          exit;

                        }



                        else

                        {   
                        	echo " Unmatched ID or Name or Password ";
                        	echo"<br>";
                        	echo " Log in Failed ";
                        	echo"<br>";
                        }


                        //$id = $_POST["id"];


                          //header('Location: ../View/HomePage.php');
                          ///exit;



                        
          } 





           





		?>