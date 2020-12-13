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


   <script>
			function validate() {
				var a = document.getElementById('id').value;
				var b = document.getElementById('username').value;
				var c = document.getElementById('password').value;
				var d = document.getElementById('email').value;
				var e = document.getElementById('dob').value;


				// console.log(x);
				if(a == "") 
				{
					document.getElementById('errorMsg').innerHTML = "ID is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(b == "") 
				{
					document.getElementById('errorMsg').innerHTML = "User Name is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(c == "") 
				{
					document.getElementById('errorMsg').innerHTML = "Password is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(d == "") 
				{
					document.getElementById('errorMsg').innerHTML = "Email is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(d == "") 
				{
					document.getElementById('errorMsg').innerHTML = "Date Of Birth is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				return true;
			}
		</script>


</head>
<body>


	<center>  
		<h1> Sign Up Form</h1>


	<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">

                 <form method="post" action="DataBaseConnection.php" method="POT" onsubmit="return validate()">

								User ID: <input type="text" id = "id" name="id" placeholder="Enter ID">
								<!-- <span class="error">* <?php echo $idErr;?></span> -->
								<br><br> 
							    

								User Name: <input type="text" id = "username" name="username" placeholder="Enter User Name">
								<!-- <span class="error">* <?php echo $nameErr;?></span> -->
								<br><br>  

								Password: <input type="Password" id = "password" name="pwd" placeholder="Enter Password">
								<!-- <span class="error">* <?php echo $pwdErr;?></span> -->
								<br><br>

								Email: <input type="email" id = "email" name="email" placeholder="Enter Email">
								<br><br>

								</b>Date of Birth: <input id = "dob" type="date" name="dob" placeholder="Enter Date of Birth">
								<!-- <span class="error">* <?php echo $dobErr;?></span> -->
								<br><br>

								<!--

								<input type="submit" name="submit1" value="Submit" action = "HomePage.php" >
                                &nbsp
							    -->

								<input style="color:green; font-size:20px; font-weight: bold" type="submit" name="submit1" value="Submit" >
								

								
								  
							</form>

							<p id="errorMsg"></p>

							</table>



		<div>


</center>


</body>
</html>