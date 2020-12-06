 
<?php
        function loginCheck($id, $pass)


        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bank";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) 

            {

             die("Connection failed: " . $conn->connect_error);

            }
        
        
            $sql = "SELECT ID FROM logindata WHERE ID='".$id."'AND Password= '".$pass."' ";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) 

            {
            // output data of each row
                $conn->close();
                return true;
            } 

            else

            {
                $conn->close();
                echo "Something is Wrong.. No Rersult Round";
                echo "<br>";
                return false; 
            }
        }




        function balanceRetrive($userId,&$name,&$balance)


        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bank";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection

            if ($conn->connect_error) 

            {

             die("Connection failed: " . $conn->connect_error);

            }
        
        
            $sql = "SELECT ID,Name,Balance FROM logindata WHERE ID='".$userId."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) 

            {
            // output data of each row
                while($row = $result->fetch_assoc())

                {
                    $name = $row["Name"];
                    $balance = $row["Balance"] ; 
                }

                $conn->close();
            } 

            else

             {
                echo "Something is Wrong.. No Rersult Round";
                echo "<br>";
                $conn->close();
            }
        }


        function updateBalance($amount,$id)

        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bank";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error)

             {

             die("Connection failed: " . $conn->connect_error);

            }
        
            //$sql = "UPDATE logindata SET Balance='".$amount."' WHERE ID='".$id."'";

            $sql = "UPDATE logindata SET Balance='".$amount."' WHERE ID='100'";
        
            if ($conn->query($sql) === TRUE) 

            {

            echo "Record updated successfully";
            

            } 

            else

             {

            echo "Error updating record: " . $conn->error;

            }
        
            $conn->close();

            }


?>

























 <?php 
	
	
    // Object Oriented Approach


/*
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['pwd'];


	 $conn = new mysqli('localhost', 'root','','bank');

	if ($conn->connect_error)
		
	{
		//die("Connection Failed");
		die( " No connection : ".mysqli_connect_error());
	}

	else
	{
            $stmt = $conn->prepare("insert into logindata(ID,Name,Password) values(?, ?, ?)");

            $stmt->bind_param("iss", $id,$name,$password);

            $stmt->execute();
            echo " Connection Successful";
            $stmt->close();
            $conn->close();
		
	}

       
*/
	?>





 
