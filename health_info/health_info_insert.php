<?php
include "../db_connect.php";
$formData = $y->formData;
$Resualt_ADL = $y->Resualt_ADL;

try {
          // set the PDO error mode to exception
          $sql = "INSERT INTO `health_info` (`IDCard`, `ID_Year`, `Wg`, `Hg`, `Wline`, `BP1`, `Smoking`,  `Alcohol`, 
                              `Mact`, `Results_diabetes`, `Results_hypertension`, `Teeth`, 
                              `Results_eye1`, `Feel_depressed`, `Feel_bored`, `Assess_remembers1`, `Assess_remembers2`, 
                              `Assess_fall`, `Urinary`, `Assess_sleep`, `Sleep_day`) 
                              VALUES (
                                      '{$formData->a}', '{$formData->b}', '{$formData->c}', '{$formData->d}', '{$formData->e}', '{$formData->f}', '{$formData->g}', 
                                      '{$formData->h}', '{$formData->i}', '{$formData->j}', '{$formData->k}', '{$formData->l}', '{$formData->m}', '{$formData->n}', 
                                       '{$formData->z}',
                                      '{$formData->aa}', '{$formData->bb}', '{$formData->cc}', '{$formData->dd}', '{$formData->ee}', '{$formData->ff}', 
                                      '{$formData->gg}', '{$formData->hh}', '{$formData->ii}', '{$formData->jj}', '{$formData->kk}'
                                      )";

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













