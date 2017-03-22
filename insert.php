<?php
require_once 'db.php';
if(isset($_POST['insert_row']))
{
    $name=$_POST['name_val'];
    $email=$_POST['email_val'];
    $dob=$_POST['dob_val'];
    $password=$_POST['password_val'];
    $Date = split('/', $dob);
    $dob_date = $Date[2].'-'.$Date[1].'-'.$Date[0];
    $query  = "INSERT INTO itable(name,email,dob,password) VALUES("."'".$name."','".$email."','".$dob_date."','".$password."')";
    $result = $con->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
    else
    {
        echo "success";
    }
    exit();
}
?>



