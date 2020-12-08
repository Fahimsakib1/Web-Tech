<!DOCTYPE html>
<html>
<head>
	<title> Lab Task 3</title>

   <style>
   	
   body
   {

   	background-color: #8F655B;
   }

   input

   {

   	width: 80%;
   	height: 5%;
   	border: 1px;
   	border-radius: 15px;
   	padding: 8px 15px 8px 15px;
   	margin: 10px 0px 15px 0px;
   	box-shadow: 1px 1px 2px 1px grey; 

   }








   </style>

</head>
<body>


	<center>  
		<h1> Sign Up Form</h1>


	<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">

                 <form method="post" action="DataBaseConnection.php">

								User ID: <input type="text" name="id" placeholder="Enter ID">
								<!-- <span class="error">* <?php echo $idErr;?></span> -->
								<br><br> 
							    

								User Name: <input type="text" name="username" placeholder="Enter User Name">
								<!-- <span class="error">* <?php echo $nameErr;?></span> -->
								<br><br>  

								Password: <input type="Password" name="pwd" placeholder="Enter Password">
								<!-- <span class="error">* <?php echo $pwdErr;?></span> -->
								<br><br>

								Email: <input type="email" name="email" placeholder="Enter Email">
								<br><br>

								</b>Date of Birth: <input type="date" name="dob" placeholder="Enter Date of Birth">
								<!-- <span class="error">* <?php echo $dobErr;?></span> -->
								<br><br>

								<!--

								<input type="submit" name="submit1" value="Submit" action = "HomePage.php" >
                                &nbsp
							    -->

								<input style="color:green; font-size:20px; font-weight: bold" type="submit" name="submit1" value="Submit" >
								

								
								  
							</form>
							</table>



		<div>


</center>


</body>
</html>