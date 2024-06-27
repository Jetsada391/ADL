<?php
include "../db_connect.php";

// $sql_cmd = "UPDATE `eye_results` SET `Results_eyeID`='{$y->Results_eyeID}',`ID_Year`='{$y->ID_Year}',
//                            `Results_eyeName`='{$y->Results_eyeName}'
// WHERE 
//   IDCard = '{$y->IDCard}'";


// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }

// $conn = null;

try {
      $sql = "UPDATE `eye_results` SET `Results_eyeID`='{$y->Results_eyeID}',`ID_Year`='{$y->ID_Year}'
      WHERE 
        IDCard = '{$y->IDCard}'";

      if ($conn->exec($sql) == 1) {
        echo json_encode(1);
      } else {
        echo json_encode(0);
      }
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
