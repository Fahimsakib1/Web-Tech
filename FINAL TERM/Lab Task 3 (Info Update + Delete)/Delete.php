<!DOCTYPE html>
<html>
<head>
	<title> Update Information</title>

   <style>
   	
   body
   {

   	/* background-color: #7E7ED9; */
   	background-color: #9020E7;
   }

   input

   {

   	width: 80%;
   	height: 10%;
   	border: 1px;
   	border-radius: 15px;
   	padding: 8px 15px 10px 15px;
   	margin: 10px 0px 15px 0px;
   	box-shadow: 1px 1px 2px 1px grey; 

   }



   </style>

</head>
<body>



	<?php


	    require ('DeleteVerify.php');

	?>	

	<center>  
		<h1> Enter User ID To Delete Information</h1>


	<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">

                 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

				User ID: <input type="text" name="id" value = "<?php echo $id?>" placeholder ="Enter ID" >
								<!-- <span class="error">* <?php echo $idErr;?></span> -->
					<br><br> 
							    

								

								<input style="color:red; font-size:20px; font-weight: bold" type="submit" name="delete" value="Delete"  > 

                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

								<button style="color:green; font-size:20px; font-weight: bold" type="button" onClick="document.location.href='index.php'">Back</button>
								

								
								  
							</form>

							</table>



		<div>


</center>


</body>
</html>
