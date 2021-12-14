<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $conct = $_POST['conct'];
    $Email = $_POST['emailid'];
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

//$stmt= 'DELETE FROM details WHERE Pincode = 0';

if ($conn->query($stmt) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt . "<br>" . $conn->error;
}


    $conn->close();

    

}





    echo "submited successfully";
//     $txt = "PHP";
// echo "I love $txt!";
 
?>
<div class="back">
    <a href="user.html"><h3>Back</h3></a>
    </div>
</body>
</html>
