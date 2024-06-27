<?php
include "../db_connect.php";
// $y = json_decode(file_get_contents('php://input'));

// $sql_cmd = "UPDATE `income_info2` SET `S_incomeID`='{$y->S_incomeID}',`S_incomeName`='{$y->S_incomeName}'

// WHERE 
//   IDCard = '{$y->IDCard}'";
// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }
//   $conn->close();

try {
  $sql = "UPDATE ``s_income` SET `S_incomeID`='{$y->S_incomeID}', `ID_Year`='{$y->ID_Year}', 
          `S_incomeName`='{$y->S_incomeName}'                       
          WHERE IDCard = '{$y->IDCard}'";

  if ($conn->exec($sql) == 1) {
    echo json_encode(1);
  } else {
    echo json_encode(0);
  }
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
