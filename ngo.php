<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeddyBuddy: NGO</title>
</head>
<body>
    <div class="disp">
        <!-- //connection -->
        <?php
        $conc = new mysqli("localhost","root","","miniproject");
        $concd = new mysqli("localhost","root","","miniproject");
        if($conc->connect_error)
        {
            die('Connection Failed : '.$conc->connect_error);
        }
        else
     {
          $query3 ="SELECT m.Medicine_Name , m.Expiry_Date ,m.Quantity ,m.Note,d.Name ,d.Contact_No , d.Email ,d.Address,d.Sr_No  FROM medinfo m, details d WHERE m.Sr_No=d.Sr_No "; 
            $query2 = "SELECT Name ,Contact_No , Email ,Address FROM details";
            $comD= mysqli_query($conc,$query2);
            $query1="SELECT Medicine_Name, Expiry_Date, Quantity,Note FROM medinfo";
            $comM= mysqli_query($conc,$query3);
           

            //to check whether query is correct or not
        //     if($comM){
        //         echo "success";

        //     }
        //    else{echo "No";}
          
           
        //    echo "Done ";
        }
        // $action = $_POST['ORDER'];
        // if(isset($action)){
        //     $deleteQuery="DELETE FROM medinfo where ";
        //     $deleteQuery2="DELETE FROM details";
        //     $result1 = mysqli_query($conc,$deleteQuery);
        //     $result2 = mysqli_query($conc,$deleteQuery2)
        //     or die(mysqli_error($conc));
        //     if($result){
        //         echo "Medicine Ordered Successfully";
        //     }
        //     else{echo "Order failed";}
        // } 
        ?>
    </div>
</body>
</html>