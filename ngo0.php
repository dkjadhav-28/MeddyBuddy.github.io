<?php
include "ngo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeddyBuddy: NGO</title>
    <link rel="stylesheet" href="ngo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
<div class="Uppernav">
            <div class="logodiv">
                <img src="navlogo2.jpg" alt="">
            </div>
            <h3>Meddy Buddy</h3>
            <div class="ngouser"><a href="user.html" >DONATE</a></div>
            <div class="ngouser"><a href="ngo0.php">NGO</a></div>
        </div>
        <div class="Lowernav">
            <div class="navmenus" id="navmenu1"><a href="HomePage.html">HOME</a></div>
            <div class="navmenus" id="navmenu2"><a href="Medicine.html">MEDICINE</a></div>
            <div class="navmenus" id="navmenu3"><a href="">ABOUT US</a></div>
            <div class="navmenus" id="navmenu4"><a href="">CONTACT US</a></div>
        </div>
</header>
<main>
    <div class="bg">
    <div class="main">
        <table class = "table-content">
            <thead class="th">
                <tr><th colspan="4">Medicine Info</th>
                <th colspan="5">Doner Details</th>
                </tr>
                <tr>
                <th>Name</th>
                <th>Expiry Date</th>
                <th>Qty</th>
                <th>Description</th>
                <th>Name of Doner</th>
                <th>Contact No.</th>
                <th>Email id</th>
                <th>Address</th>
                <th></th>
            </tr>
             
          
            </thead>
            <tbody class="tb">
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($comM))
                    {echo "<tr>";
                    echo " <td>"; echo $row["Medicine_Name"]; echo"</td>";
                    echo "<td>";  echo $row["Expiry_Date"] ;echo"</td>";
                    echo "<td>";  echo $row["Quantity"]; echo" </td>"; 
                    echo "<td>" ; echo $row["Note"]; echo"</td>"; 
                    echo "<td>"; echo $row["Name"] ; echo"</td>";
                     echo"<td>"; echo $row["Contact_No"]; echo"</td>";
                     echo"<td>"; echo $row["Email"] ; echo"</td>";
                     echo"<td>"; echo $row["Address"]; echo"</td>";
                     echo "<td>";?> <a href="order.php?id=<?php echo $row["Sr_No"];?>" onclick="myfunc()"><button type="button" class="order_button">ORDER</button></a>
                     <script>
                         function myfunc(){
                             alert("Medicine Ordered Successfully");
                         }
                     </script>
                     <?php
                    }
                     
                     ?>
                     

                     
                    <!-- tried code -->
                    <!-- <td><?php echo $row["Medicine_Name"] ?></td>
                    <td><?php echo $row["Expiry_Date"] ?></td>
                    <td><?php echo $row["Quantity"] ?></td>
                    <td><?php echo $row["Note"]?></td> -->

                      <!-- <td><?php echo $row["Name"] ?></td>
                     <td><?php echo $row["Contact_No"]?></td>
                     <td><?php echo $row["Email"] ?></td>
                     <td><?php echo $row["Address"] ?></td>
                     <td></td> -->
                </tr>
                <!-- this is sample data to test table -->
                     <!-- <tr>
                        <td>Crosine</td>
                        <td>22/02/2022</td>
                        <td>20</td>
                        <td>Body pain etc</td>
                        <td>Dhananjay</td>
                        <td> 9920082614</td>
                        <td>dhananjaykjadhav@71.gmail</td>
                        <td>Khanda Colony</td>
                        <td><a href="#">Recive donation</a></td>
                         </tr> -->
            </tbody>

        </table>
    </div>
    </div>
                </main>
        <footer>
        <div class="footer">
        <div id="footerImage">
            <img src="navlogo2.jpg" alt="">
        </div>
        <h1>Meddy Buddy</h1>
        <div id="Bigcontiner">
            <div id="logobox1"></div>
            <div id="logobox2"></div>
            <div id="logobox3"></div>
            <div id="logobox4"></div>
            <div class="footerName">
                <h1 id="first">linkedin</h1>
                <h1 id="second">Email</h1>
                <h1 id="Thrid">Facebook</h1>
                <h1 id="Fourth">Instagram</h1>
            </div>
        </div>
    </div>
        </footer>
</body>
</html>