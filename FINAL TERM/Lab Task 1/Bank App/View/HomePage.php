<!DOCTYPE HTML>

<html>
	<head>
		<title>Home Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		
		<?php
                

               ///require('../Data/DataBaseConnection.php');

               require('../controller/HomePageVerification.php');

		       balanceRetrive("100",$name,$balance);
               

		?>


				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h1>Bank Application: Home Page</h1>

						  <td>
			              <table style="width: fit-content;">
			              
			              <tr>
			              <th>ID    </th>
			              <th>Name    </th>
			              <th>Balance  </th>
			              </tr>

			             <tr>
			             <td><?php echo $userId?></td>
						 <td><?php echo $name?></td>
						 <td><?php echo $balance?></td>
			             </tr>

			             </table>
			             <br><br>
			             </td>


			              
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                               <h3>Account Number : 38811054565225  </h3>
                                <h3>Account Holder Name : <?php echo $name ?></h3>
                                <h3>Balance : <?php echo $balance ?> Taka</h3>
                                <br>

								Deposit Amount: <input type="text" name="Deposit">
								<br>
                                <input type="submit" name="submit1" value="Deposit" >
								<br><br> 

								Withdraw Amount: <input type="text" name="Withdraw"> 
								<br>
                                <input type="submit" name="submit2" value="Withdraw" >
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
