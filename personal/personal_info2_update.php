<?php
include "../db_connect.php";

// $sql_cmd = "UPDATE `personal` SET `Name`='{$y->Name}',`Num_Home`='{$y->Num_Home}',`Num_Home`='{$y->Num_Home}'
//                                       ,`Moo`='{$y->Moo}',`Tb`='{$y->Tb}',`Amp`='{$y->Amp}',`Prov`='{$y->Prov}',
//                                       `Phone`='{$y->Phone}',`Status`='{$y->Status}',`Edu`='{$y->Edu}'
//                                       ,`Income`='{$y->Income}'
//                                       WHERE IDCard = '{$y->IDCard}'";
// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }
//   $conn->close();

  try {
    $sql = "UPDATE `personal` SET `Name`='{$y->Name}',`Num_Home`='{$y->Num_Home}',`Num_Home`='{$y->Num_Home}'
    ,`Moo`='{$y->Moo}',`Tb`='{$y->Tb}',`Amp`='{$y->Amp}',`Prov`='{$y->Prov}',
    `Phone`='{$y->Phone}',`Status`='{$y->Status}',`Edu`='{$y->Edu}'
    ,`Income`='{$y->Income}'
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

