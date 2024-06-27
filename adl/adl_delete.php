<?php
include "../db_connect.php";



try {
  $sql = "DELETE FROM `adl1` WHERE `IDCard` = '{$y->pn}';";
  
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
