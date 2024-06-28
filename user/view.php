<?php

include "../admin/db_connect.php";
$IDCard=12345678;
$formData = $y->formData;
// $Resualt_ADL = $y->Resualt_ADL;

$formDataear = date("Y")+543;

// $sql_cmd = "INSERT INTO `personal` (`IDCard`,`ID_Year`,`Name`, `Moo`, `Num_Home`, `Status`, `Edu`, `Income`) 
//             VALUES ('{$IDCard}','{$formDataear}','{$formData->personal1}', '{$formData->personal2}', '{$formData->personal3}', '{$formData->status}', '{$formData->edu}', '{$formData->income}');";

// $sql_cmd = "INSERT INTO `health_info` (`IDCard`,`ID_Year`,`Wg`, `Hg`, `Wline`, `BP1`, 
//             `Smoking`, `Alcohol`, `Mact`, `ADL1`, `ADL2`, `ADL3`, `ADL4`, `ADL5`, `ADL6`, `ADL7`, `ADL8`, `ADL9`, `ADL10`, 
//               `Teeth`, 
//              `Feel_depressed`, `Feel_bored`, `Assess_remembers1`, `Urinary`, `Sleep_day`) 
//             VALUES ('{$IDCard}','{$formDataear}',
//             '{$formData->health_info1}', '{$formData->health_info2}', '{$formData->health_info3}', '{$formData->health_info4}', '{$formData->smok}', '{$formData->alcohol}', '{$formData->mat}', 
//             '{$formData->adl1}', '{$formData->adl2}', '{$formData->adl3}', '{$formData->adl4}', '{$formData->adl5}', '{$formData->adl6}', 
//             '{$formData->adl7}', '{$formData->adl8}', '{$formData->adl9}', '{$formData->adl10}', '{$Resualt_ADL}', '{$formData->teeth}',
//             '{$formData->feel}', '{$formData->ccfeel_bored}','{$formData->feel_sum}', '{$formData->urinary}', '{$formData->sleep_detail}'
//             '{$formData->mm}', '{$formData->nn}'
//             )";
if ($formData->situation !== null) {
  if ($formData->situation1 !== null) {
    if ($formData->situation2 !== null) {
      if ($formData->situation3 !== null) {
        if ($formData->situation4 !== null) {
          if ($formData->situation5 !== null) {
$sql_cmd = "INSERT INTO `situation` ( `ID`,`IDCard`,`ID_Year`,`SituID`) 
            VALUES ( NULL,'{$IDCard}','{$formDataear}','{$formData->situation}'),
                   ( NULL,'{$IDCard}','{$formDataear}','{$formData->situation1}'), 
                   ( NULL,'{$IDCard}','{$formDataear}','{$formData->situation2}'),
                   ( NULL,'{$IDCard}','{$formDataear}','{$formData->situation3}'),
                   ( NULL,'{$IDCard}','{$formDataear}', '{$formData->situation4}'),
                   ( NULL,'{$IDCard}','{$formDataear}','{$formData->situation5}');";
}}}}}}

// $sql_cmd = "INSERT INTO `occupation` ( `ID`,`IDCard`,`ID_Year`,`OccID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}','{$formData->occupation}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->occupation1}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->occupation2}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->occupation3}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->occupation4}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->occupation5}');";

// $sql_cmd = "INSERT INTO `social_info` (`ID`,`IDCard`,`ID_Year`,`SocID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}','{$formData->social}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social1}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social2}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social3}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social4}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social5}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social6}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social7}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->social8}');";

// $sql_cmd = "INSERT INTO `s_income` (`ID`,`IDCard`,`ID_Year`,`S_incomeID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}', '{$formData->s_income}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->s_income1}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->s_income2}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->s_income3}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->s_income4}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->s_income5}');";
                   


// $sql_cmd = "INSERT INTO `chronic_disease` (`ID`,`IDCard`,`ID_Year`,`CdisID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}','{$formData->cdis}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis1}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis2}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis3}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis4}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis5}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis6}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis7}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis8}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis9}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis10}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis11}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis12}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis13}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->cdis14}');";

// $sql_cmd = "INSERT INTO `preexisting_condition` (`ID`,`IDCard`,`ID_Year`, `PcdisID`) 
//             VALUES ( NULL,'{$IDCard}','{$formDataear}','{$formData->pcdis}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->pcdis1}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->pcdis2}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->pcdis3}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->pcdis4}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->pcdis5}');";

// $sql_cmd = "INSERT INTO `phydis`(`ID`,`IDCard`,`ID_Year`,`PhydisID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}','{$formData->phydis}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis1}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis2}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis3}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis4}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis5}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->phydis6}');";


// $sql_cmd = "INSERT INTO `eye_results` (`ID`,`IDCard`,`ID_Year`,`Results_eyeID`) 
//             VALUES (NULL,'{$IDCard}','{$formDataear}','{$formData->eye}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye1}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye2}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye3}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye4}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye5}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye6}'),
//                    ('{$IDCard}','{$formDataear}','{$formData->eye7}');";

// $sql_cmd = "INSERT INTO `sleep_detail` (`ID`,`IDCard`,`ID_Year`,`sleep_detailID`) 
//             VALUES ( NULL,'{$IDCard}','{$formDataear}','{$formData->sleep_detail}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->sleep_detail1}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->sleep_detail2}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->sleep_detail3}'),
//                    ( '{$IDCard}','{$formDataear}','{$formData->sleep_detail4}');";


// echo $sql_cmd;


if ($conn->query($sql_cmd) == TRUE) {
  echo "1";
} else {
  echo "0";
}
$conn = null

?>
