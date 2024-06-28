<?php
include "../db_connect.php";

// $sql_cmd = "INSERT INTO `preexisting_condition` (`IDCard`, `PcdisID`, `ID_Year`, `PcdisName`) 
//             VALUES ('{$y->a}', '{$y->b}', '{$y->c}', '{$y->d}');";

// //echo $sql_cmd;
// if ($conn->query($sql_cmd) === TRUE) 
// {
//   echo "1";
// } else {
//   echo "0";

// }
// $conn->close();

try {
  $sql = "INSERT INTO `phydis`(`IDCard`, `ID_Year`, `PhydisID`, `Phydis_Name`) 
                                      VALUES ('{$y->a}', '{$y->b}', '{$y->c}');";

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
