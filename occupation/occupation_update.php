<?php
include "../db_connect.php";
// $y = json_decode(file_get_contents('php://input'));

// $sql_cmd = "UPDATE `occupation` SET `OccID`='{$y->OccID}',`Occ_Year`='{$y->Occ_Year}',`Occ_Name`='{$y->Occ_Name}'
                           
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
    $sql = "UPDATE `occupation` SET `OccID`='{$y->OccID}',`Occ_Year`='{$y->Occ_Year}',`Occ_Name`='{$y->Occ_Name}'                      
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
