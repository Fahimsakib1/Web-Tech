<?php
        function loginCheck($id, $pass){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bankapplication";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT ID FROM logininfo WHERE ID='".$id."'AND Password= '".$pass."' ";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
                $conn->close();
                return true;
            } 
            else {
                $conn->close();
                echo "0 results";
                return false; 
            }
        }


?>