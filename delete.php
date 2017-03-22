<?php
include "db.php";
if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
     $query  = "DELETE FROM itable WHERE sno=".$row_no; 
     $result = $con->query($query);  
    if (!$result) die ("Database access failed: " . $conn->error); 
    else{ 
    echo "success";
    }
 exit();
}
?>