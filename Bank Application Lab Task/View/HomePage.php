<!DOCTYPE HTML>

<html>
	<head>
		<title>Home Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		

		

	
		
				
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h1>Bank Application: Home Page</h1>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

								
                                <h3>Account Number : 38811054565225 </h3>
                                <h3>Account Holder Name : Fahim Faysal</h3>
                                <h3>Balance : 1500 Taka</h3>
                                <br>

								Deposit Amount: <input type="text" name="Deposit">
								<br>
                                <input type="submit" name="submit1" value="Deposit" action = "Dashboard.php">
								<br><br> 

								Withdraw Amount: <input type="text" name="Withdraw"> 
								<br>
                                <input type="submit" name="submit1" value="Withdraw" action = "Dashboard.php">
								<br><br>

								

								<button type="button" onClick="document.location.href='Login.php'">Back</button>

								
								  

								
								 

							</form>
							<br><br>

							

						</div>	
					</td>
				</tr>

				<tr>
					
		
	</body>
</html>
