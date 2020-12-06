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

							






                               <!--
                                <form  action="DataBaseConnection.php" method="post">
							     -->

							
								ID: <input type="text" name="id">
								<span class="error">* <?php echo $idErr;?></span>
								<br><br> 
							    

								Name: <input type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>  

								Password: <input type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br><br>

								<!--

								<input type="submit" name="submit1" value="Submit" action = "HomePage.php" >
                                &nbsp
							    -->

								<input type="submit" name="submit1" value="Submit" >
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


/* 


 include 'C:\xampp\htdocs\WEB TECH CODES PHP\FINAL TERM\Bank App\Data\DataBaseConnection.php';
//include 'C:\xampp\htdocs\WEB TECH CODES PHP\FINAL TERM\Bank Application Lab Task\Data\DataBaseTableCreate.php';

if (isset($POST['submit1']))

{
    $id = $_POST['id'];
	$name = $_POST['name'];
	$password = $_POST['pwd'];

    
    // $insertquery = " insert into LoginInfo (ID,Name,Password) values('$id', '$name', '$password')";

    $insertquery = " Insert Into Information (ID,Name,Password) values (5, 'Nayem',909012)" ;


    //$insertquery = " insert into logintable (Name,Password) values('$name', '$password')";


    /*$result = mysqli_query($conn, $insertquery);

    if($result)

    {
         
      
       echo " Data Inserted Properly" ;

    }

    else

    {
         
       
       echo " Data Not Inserted ";
      

    }*/


    // $InsertDataSql = " Insert Into LoginInfo (ID,Name,Password) values (2, 'Faysal',123456)" ;

		/*                   
       

       if ($conn-> query($insertquery) )

       {
          echo " Data Inserted Successfully  ";

       }

       else

       {
       	 echo " Data Not Inserted "; 
       	 echo "<br />";
       	 echo $conn->error;
          
       }





}

$conn -> close();

*/

 ?>




	

