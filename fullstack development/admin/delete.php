<?php
    require_once"connection.php";
    global $conn;

    $fetch=$_POST["user_id"];
    $dq= "DELETE FROM complaints WHERE user_id=$fetch";

    $s=mysqli_query($conn,$dq);

    if($s)
    {
        echo "Record deleted Successfully!!!";
        echo '<meta http-equiv="refresh" content="0; url=http://raisemyvoice.freecluster.eu/admin/profile.php">';
    }
    else
    {
        echo "XXXXXXX Connect failed XXXXXXX";
    }
?>