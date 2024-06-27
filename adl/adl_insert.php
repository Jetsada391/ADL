<?php
include "../db_connect.php";
$formData = $y->formData;
$Resualt_ADL = $y->Resualt_ADL;

try {
          // set the PDO error mode to exception
          $sql = "INSERT INTO `adl1` (`IDCard`, `ID_Year`,`ADL1`, `ADL2`, `ADL3`, `ADL4`, `ADL5`, `ADL6`, `ADL7`, `ADL8`, `ADL8`,
                              `ADL9`, `ADL10`, `Resualt_ADL`) 
                              VALUES (
                                      '{$formData->a}', '{$formData->b}', 
                                      '{$formData->adl1}', '{$formData->adl2}', '{$formData->adl3}', '{$formData->adl4}', '{$formData->adl5}', '{$formData->adl6}', 
                                      '{$formData->adl7}', '{$formData->adl8}', '{$formData->adl9}', '{$formData->adl10}', '{$Resualt_ADL}')";

          // use exec() because no results are returned
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













