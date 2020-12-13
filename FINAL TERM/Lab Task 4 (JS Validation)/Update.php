<!DOCTYPE html>
<html>
<head>
	<title> Update Information</title>

   <style>
   	
   body
   {

   	background-color: #DA965B;
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
				var m = document.getElementById('id').value;
				var n = document.getElementById('username').value;
				var o = document.getElementById('password').value;
				var p = document.getElementById('email').value;
				var q = document.getElementById('dob').value;


				// console.log(x);
				if(m == "") 
				{
					document.getElementById('errorMsg').innerHTML = "ID is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(n == "") 
				{
					document.getElementById('errorMsg').innerHTML = "User Name is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(o == "") 
				{
					document.getElementById('errorMsg').innerHTML = "Password is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(p == "") 
				{
					document.getElementById('errorMsg').innerHTML = "Email is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}

				else if(q == "") 
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



	<?php


	    require ('UpdateVerify.php');

	?>	

	<center>  
		<h1> Update Information</h1>


	<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">

                 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

                 	

				User ID: <input type="text" id = "id" name="id" value = "<?php echo $id?>" placeholder ="Enter ID" >
								<!-- <span class="error">* <?php echo $idErr;?></span> -->
					<br><br> 
							    

								User Name: <input type="text" id = "username" name="username" value = "<?php echo $fullname?>" placeholder="Enter User Name"  >
								<!-- <span class="error">* <?php echo $nameErr;?></span> -->
								<br><br>  

								Password: <input type="Password" id = "password" name="pwd"  value = "<?php echo $newpassword?>"  placeholder="Enter Password">
								<!-- <span class="error">* <?php echo $pwdErr;?></span> -->
								<br><br>

								Email: <input type="email" id = "email" name="email"    value = "<?php echo $newemail?>"   placeholder="Enter Email">
								<br><br>

								</b>Date of Birth: <input type="date" id = "dob" name="dob"   value = "<?php echo $newdob?>"     placeholder="Enter Date of Birth">
								<!-- <span class="error">* <?php echo $dobErr;?></span> -->
								<br><br>

								<!--

								<input type="submit" name="submit1" value="Submit" action = "HomePage.php" >
                                &nbsp
							    -->

								<input style="color:green; font-size:20px; font-weight: bold" type="submit" name="update" value="Update"  > 

                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

								<button style="color:blue; font-size:20px; font-weight: bold" type="button" onClick="document.location.href='index.php'">Back</button>
								

								
								  
							</form>

							</table>



		<div>


</center>


</body>
</html>