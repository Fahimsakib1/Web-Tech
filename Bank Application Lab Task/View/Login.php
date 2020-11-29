<!DOCTYPE HTML>

<html>
	<head>
		<title>login Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		

		<?php
          


    

          require('../Controller/LoginController.php');




		?>


	
		
				
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2>LOGIN</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

								User Name: <input type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>  

								Password: <input type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br><br>

								<input type="submit" name="submit1" value="Submit" action = "HomePage.php">
								&nbsp

								
								  

								
								 

							</form>
							<br><br>

							

						</div>	
					</td>
				</tr>

				<tr>
					
		
	</body>
</html>


<?php 

//include '..Data/DataBaseConnection.php';

include 'C:\xampp\htdocs\WEB TECH CODES PHP\FINAL TERM\Bank Application Lab Task\Data\DataBaseConnection.php';

 ?>
