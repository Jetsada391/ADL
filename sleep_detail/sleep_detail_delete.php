<?php
include "../db_connect.php";

// $sql_cmd = "DELETE FROM `sleep_detail` WHERE `IDCard` = '{$y->pn}';";

// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }
//   $conn->close();

  try {
    $sql = "DELETE FROM `sleep_detail` WHERE `IDCard` = '{$y->pn}';";
            
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
