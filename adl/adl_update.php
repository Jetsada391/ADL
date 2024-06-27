<?php
include "../db_connect.php";

  try {
        $sql = "UPDATE `adl1` SET `ID_Year`='{$y->ID_Year}',`ADL1`='{$y->ADL1}',
                           `ADL2`='{$y->ADL2}',`ADL3`='{$y->ADL3}',`ADL4`='{$y->ADL4}',`ADL5`='{$y->ADL5}',
                           `ADL6`='{$y->ADL6}',`ADL7`='{$y->ADL7}',`ADL8`='{$y->ADL8}',`ADL9`='{$y->ADL9}',
                           `ADL10`='{$y->ADL10}',`Resualt_ADL`='{$y->Resualt_ADL}'
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
