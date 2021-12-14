<?php

use PhpMyAdmin\Scripts;

include "ngo.php";
$id = $_GET["id"];
mysqli_query($conc,"DELETE FROM medinfo where Sr_No=$id");
mysqli_query($conc,"DELETE FROM details WHERE Sr_No=$id");
echo "done";
?>
//to autorefresh we will add javascript
<script type="text/javascript">
    window.location="ngo0.php";
   </script> 
