<?php
      include "db.php";
      $tableName = "itable";
      
      $array = array();
        if($_POST['data_val']==0){
      $query = "select * from itable";
        }
elseif($_POST['data_val']==1){
      $query = "select * from itable order by sno DESC limit 1";}
      
      $result = mysqli_query($con,$query);
      
      while($row = mysqli_fetch_array($result)){
      $sno = $row['sno'];
      $Name = $row['Name'];
      $email = $row['email'];
      $dob = new DateTime($row['dob']);
      $password = $row['password'];
      $array[] = array("sno" => $sno,
                    "Name" => $Name,
                    "email" => $email,
                    "dob" => $dob->format('d/m/Y'));
    }
      echo json_encode( $array );
?>