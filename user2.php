<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doner Details</title>
</head>
<body>
    <div class="form2">
          <!-- //form2 phpcode -->
    <?php
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $conct = $_POST['conct'];
    $Email = $_POST['Email'];
    $add = $_POST['add'];
    $pincode = $_POST['pincode'];

    //conection to sql
$conn = new mysqli("localhost","root","","miniproject");

if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
//     $stmt = $conn->prepare("insert in details(Name,Age,Gender,Contact_No,Email,Address,Pincode)values($fname,$age,$gender,$conct,$Email,$add,$pincode)");
//     // $stmt->bind_param("sisissi",$fname,$age,$gender,$conct,$Email,$add,$pincode);
  
//      $stmt->execute();
//     // $stmt->store_result();
//     echo 'Doneted Successfully...Thank You';
//     $stmt->close();

$stmt = "INSERT INTO details(Name,Age,Gender,Contact_No,Email,Address,Pincode)
VALUES ('$fname','$age','$gender','$conct','$Email','$add','$pincode')";

//$stmt= 'DELETE FROM details'; "DELETE STATEMENT"
// $stmt= 'DELETE FROM details WHERE Age = 0';
// $stmt= 'DELETE FROM details WHERE Gender="M" ';
// $stmt= 'DELETE FROM details WHERE Gender="F" ';
// $stmt= 'DELETE FROM details WHERE Gender="Female" ';

if ($conn->query($stmt) === TRUE) {
  //echo "Doner details added successfully";
  "<br>";
} else {
  echo "Error: " . $stmt . "<br>" . $conn->error;
}



    $conn->close();

    

}





    // echo "submited successfully";
//     $txt = "PHP";
// echo "I love $txt!";
 
?>
        <?php
        $mname = $_POST['mname'];
        $qty = $_POST['qty'];
        $type = $_POST['type'];
        $edate = $_POST['edate'];
        $cname = $_POST['cname'];
        $note = $_POST['note'];
        $code = $_POST['code'];
    
        //conection to sql
    $conn = new mysqli("localhost","root","","miniproject");
    
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
    //     $stmt = $conn->prepare("insert in details(Name,Age,Gender,Contact_No,Email,Address,Pincode)values($fname,$age,$gender,$conct,$Email,$add,$pincode)");
    //     // $stmt->bind_param("sisissi",$fname,$age,$gender,$conct,$Email,$add,$pincode);
      
    //      $stmt->execute();
    //     // $stmt->store_result();
    //     echo 'Doneted Successfully...Thank You';
    //     $stmt->close();
    
     $sql = "INSERT INTO medinfo(Medicine_Name,Quantity,Type,Expiry_Date,Cname,Note,Code)
     VALUES ('$mname','$qty','$type','$edate','$cname','$note','$code')";
    
    //$sql= 'DELETE FROM medinfo';
    
    if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    //echo "Doneted successfully Thank You!!!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
        $conn->close();
    
        
    
    }
    "<br>";
    
        // echo "submited successfully";
    //     $txt = "PHP";
    // echo "I love $txt!";
    ?>
  
     
     <div class="back">
    //<a href="user.html"><h3>Back</h3></a>
    <script>
               
                  alert("Medicines Doneted Successfully, Thank you!!!")
                  window.location='user.html';
            </script>
    </div>
    
    </div>
</body>
</html>