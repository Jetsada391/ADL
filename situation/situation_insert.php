<?php
include "../db_connect.php";

// $sql_cmd = "INSERT INTO `situation` (`IDCard`,`ID_Year`,  `SituID`, `situname`) 
//             VALUES ('{$y->a}', '{$y->d}','{$y->b}', '{$y->c}');";

// echo $sql_cmd;
// if ($conn->query($sql_cmd) === TRUE) 
// {
//   echo "1";
// } else {
//   echo "0";
// }
// $conn->close();

try {
  $sql = "INSERT INTO `preexisting_condition` (`IDCard`, `PcdisID`, `ID_Year`) 
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
