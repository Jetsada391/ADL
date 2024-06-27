<?php
include "../db_connect.php";

try {
  $sql = "INSERT INTO `s_income` (`IDCard`, `S_incomeID`, `ID_Year`) 
          VALUES ('{$y->a}', '{$y->b}', '{$y->d}')";
  
  if($conn->exec($sql)== TRUE) 
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
