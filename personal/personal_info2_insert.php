<?php
include "../db_connect.php";

// $sql_cmd = "INSERT INTO `personal` (`IDCard`, `Name`, `Num_Home`, `Moo`, `Tb`, `Amp`, `Prov`, `Phone`, `Status`, `Edu`, `Income`) 
//             VALUES ('{$y->a}', '{$y->b}', '{$y->c}', '{$y->d}', '{$y->e}', '{$y->f}', '{$y->g}', '{$y->h}', '{$y->i}', '{$y->j}', '{$y->k}');";
// // echo $sql_cmd;
// if ($conn->query($sql_cmd) === TRUE) 
// {
//   echo "1";
// } else {
//   echo "0";

// }
// $conn->close();
try {
  $sql = "INSERT INTO `personal` (`IDCard`, `Name`, `Num_Home`, `Moo`, `Tb`, `Amp`, `Prov`, `Phone`, `Status`, `Edu`, `Income`) 
          VALUES ('{$y->a}', '{$y->b}', '{$y->c}', '{$y->d}', '{$y->e}', '{$y->f}', '{$y->g}', '{$y->h}', '{$y->i}', '{$y->j}', '{$y->k}');";
          
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
