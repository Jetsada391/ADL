<?php
include "db_connect.php";



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
