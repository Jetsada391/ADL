<?php
include "../db_connect.php";
$y = json_decode(file_get_contents('php://input'));

// $sql_cmd = "UPDATE `health_info` SET `ID_Year`='{$y->ID_Year}',`Wg`='{$y->Wg}',
//                            `Hg`='{$y->Hg}',`Wline`='{$y->Wline}',`BP1`='{$y->BP1}',`BP2`='{$y->BP2}',
//                            `Cdis1`='{$y->Cdis1}',`Phydis`='{$y->Phydis}',`Smoking`='{$y->Smoking}',`Smoking_year`='{$y->Smoking_year}',
//                            `Alcohol`='{$y->Alcohol}',`Algohol_year`='{$y->Algohol_year}',`Mact`='{$y->Mact}',`ADL1`='{$y->ADL1}',
//                            `ADL2`='{$y->ADL2}',`ADL3`='{$y->ADL3}',`ADL4`='{$y->ADL4}',`ADL5`='{$y->ADL5}',
//                            `ADL6`='{$y->ADL6}',`ADL7`='{$y->ADL7}',`ADL8`='{$y->ADL8}',`ADL9`='{$y->ADL9}',
//                            `ADL10`='{$y->ADL10}',`Resualt_ADL`='{$y->Resualt_ADL}',`Results_diabetes`='{$y->Results_diabetes}',`Results_hypertension`='{$y->WgResults_hypertension}',
//                            `Teeth`='{$y->Teeth}',`Results_eye1`='{$y->Results_eye1}',`Feel_depressed`='{$y->Feel_depressed}',`Feel_bored`='{$y->Feel_bored}',
//                            `Assess_remembers1`='{$y->Assess_remembers1}',`Assess_remembers2`='{$y->Assess_remembers2}',`Assess_fall`='{$y->Assess_fall}',`Urinary`='{$y->Urinary}',
//                            `Assess_sleep`='{$y->Assess_sleep}',`Sleep_day`='{$y->Sleep_day}',`Assess_knee`='{$y->Assess_knee}',`Body_mass_value`='{$y->Body_mass_value}',
//                            `Body_mass`='{$y->Body_mass}'
// WHERE 
//   IDCard = '{$y->IDCard}'";


// $conn = new mysqli("localhost", 'root', "", 'adl');
// $sql_result = $conn->query($sql_cmd);

// if($sql_result){
//   echo json_encode(1); 
// }else {
//   echo json_encode(0); 
// }

//   $conn->close();


  try {
        $sql = "UPDATE `health_info` SET `ID_Year`='{$y->ID_Year}',`Wg`='{$y->Wg}',
                           `Hg`='{$y->Hg}',`Wline`='{$y->Wline}',`BP1`='{$y->BP1}',`Smoking`='{$y->Smoking}',
                           `Alcohol`='{$y->Alcohol}',`Mact`='{$y->Mact}',`Results_diabetes`='{$y->Results_diabetes}',`Results_hypertension`='{$y->WgResults_hypertension}',
                           `Teeth`='{$y->Teeth}',`Results_eye1`='{$y->Results_eye1}',`Feel_depressed`='{$y->Feel_depressed}',`Feel_bored`='{$y->Feel_bored}',
                           `Assess_fall`='{$y->Assess_fall}',`Urinary`='{$y->Urinary}',
                           `Assess_sleep`='{$y->Assess_sleep}',`Sleep_day`='{$y->Sleep_day}'
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
