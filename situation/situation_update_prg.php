<?php
include "../db_connect.php";

// $sql_cmd = "UPDATE `situation`
//             SET `SituID`='{$y->SituID}','{$y->ID_Year}',`Situname`='{$y->Situname}'
//             WHERE IDCard = '{$y->IDCard}'";


// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }
//   $conn->close();

  try {
    $sql = "UPDATE `situation`
            SET `SituID`='{$y->SituID}','{$y->ID_Year}',`Situname`='{$y->Situname}'
            WHERE IDCard = '{$y->IDCard}'";

            
    if($conn->exec($sql)== 1) 
    {
      echo json_encode(1);
      } else {
      echo json_encode(0); 
      }
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
