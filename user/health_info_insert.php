<?php

include "db_connect.php";

$formData = $y->formData;
$Resualt_ADL = $y->Resualt_ADL;

$sql_cmd = "INSERT INTO `health_info` (`Wg`, `Hg`, `Wline`, `BP1`, 
                              `Phydis`, `Smoking`, `Smoking_year`, `Alcohol`, `Algohol_year`, 
                               `Mact`, `ADL1`, `ADL2`, `ADL3`, `ADL4`, `ADL5`, `ADL6`, `ADL7`, `ADL8`, `ADL9`, `ADL10`, 
                               `Resualt_ADL`, `Results_diabetes`, `Results_hypertension`, `Teeth`, `Results_eye1`, 
                               `Feel_depressed`, `Feel_bored`, `Assess_remembers1`, `Assess_remembers2`, `Assess_fall`, 
                               `Urinary`, `Assess_sleep`, `Sleep_day`, `Assess_knee`, `Body_mass_value`, `Body_mass`) 
            VALUES (
            '{$formData->health_info1}', '{$formData->health_info2}', '{$formData->health_info3}', '{$formData->health_info4}', '{$formData->e}', '{$formData->f}', '{$formData->g}', 
            '{$formData->h}', '{$formData->i}', '{$formData->j}', '{$formData->k}', '{$formData->l}', '{$formData->m}', '{$formData->n}', 
            '{$formData->adl1}', '{$formData->adl2}', '{$formData->adl3}', '{$formData->adl4}', '{$formData->adl5}', '{$formData->adl6}', 
            '{$formData->adl7}', '{$formData->adl8}', '{$formData->adl9}', '{$formData->adl10}', '{$Resualt_ADL}', '{$formData->z}',
            '{$formData->aa}', '{$formData->bb}', '{$formData->cc}', '{$formData->dd}', '{$formData->ee}', '{$formData->ff}', 
            '{$formData->gg}', '{$formData->hh}', '{$formData->ii}', '{$formData->jj}', '{$formData->kk}', '{$formData->ll}',
            '{$formData->mm}', '{$formData->nn}'
            )";


// echo $sql_cmd;


if ($conn->query($sql_cmd) === TRUE) {
  echo "1";
} else {
  echo "0";
}
$conn = null

?>
