<?php

			$name = $pwd= "";
			$nameErr= $pwdErr= ""; 

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				
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


           if( !empty($_POST["name"]) && !empty($_POST["pwd"]) )

           {


                    if ( $name == Fahim && $pwd == 123 )

                    {
                        
                        header('Location: ../View/HomePage.php');
                        exit;

                    }

                    else
                    	
                        {
                        	header('Location: ../View/LoginFailed.php');
                             exit;
                        }

                        
           }



		?>