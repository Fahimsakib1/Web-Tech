<?php

    require('../Data/DataBaseConnection.php');
    //session_start();
    $userId = $name= $balance = $amountDeposit = $amountWithdraw ='';
    //$userId=$_SESSION["userId"];

    $userId="100";
    $amount = "0";
    balanceRetrive($userId,$name,$balance);

    if ($_SERVER["REQUEST_METHOD"] == "POST") 

    {
        $amountDeposit=$_POST['Deposit'];
        $amountWithdraw=$_POST['Withdraw'];
        //$userId=$_SESSION["userId"];

        if (isset($_POST['submit1'])) 

        {
            

            $amount=$amount+$balance;
            echo " New Balance : ".$balance ." Taka";
            echo"<br>";
            updateBalance($amount,$userId);
            $amount='';
            balanceRetrive($userId,$name,$balance);


        }

        else if(isset($_POST['submit2']))

        {
            if($balance<$amount+500)

            {
                
                echo "you can not withdaw all of your money (minimum balance 500 must be keep in your account)";
   
            }

            else

            {
                $amount=$balance-$amount;
                updateBalance($amount,$userId);
                $amount='';
                balanceRetrive($userId,$name,$balance);
            }
            
        }




    }
?>