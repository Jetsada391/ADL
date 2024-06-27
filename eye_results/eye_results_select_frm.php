<?php
include "../db_connect.php";


// $sql_cmd = "SELECT * FROM `chronic_disease` 
// WHERE 
//       IDCard LIKE '%{$y->nah}%' OR
//       CdisID LIKE '%{$y->nah}%' OR
//       ID_Year LIKE '%{$y->nah}%' OR
//       CdisName LIKE '%{$y->nah}%'; LIMIT 10";

// $sql_cmd = "SELECT * FROM `chronic_disease` LIMIT 10";

//var_dump($y) ;
if(empty($y)){
  $sql_cmd = "SELECT eye_results.IDCard, eye_results.Results_eyeID, eye_results.ID_Year, eyename.eye_name 
              FROM `eye_results` 
              INNER JOIN eyename ON eye_results.Results_eyeID=eyename.Results_eyeID;  LIMIT 5";
  // $sql_cmd = " SELECT eye_results.IDCard, eye_results.Results_eyeID, eye_results.ID_Year, eyename.eye_name	
  // FROM `eye_results`
  // INNER JOIN eyename ON eye_results.Results_eyeID=eyename.Results_eyeID; LIMIT 15";
  // SELECT eye_results.IDCard, eye_results.Results_eyeID, eye_results.ID_Year, eyename.eye_name	
  // FROM `eye_results`
  // INNER JOIN eyename ON eye_results.Results_eyeID=eyename.Results_eyeID;

}else{
  
$sql_cmd = "SELECT eye_results.IDCard, eye_results.Results_eyeID, eye_results.ID_Year, eyename.eye_name 
            FROM `eye_results` 
            INNER JOIN eyename ON eye_results.Results_eyeID=eyename.Results_eyeID
            WHERE IDCard LIKE '%{$y->nah}%' or 
                  eye_results.Results_eyeID LIKE '%{$y->nah}%'or
                  ID_Year LIKE '%{$y->nah}%'or 
                  eyename.eye_name LIKE '%{$y->nah}%' LIMIT 5";

}
// echo $sql_cmd;



// $conn = new mysqli("localhost", 'root', "", 'adl');

// $sql_result = $conn->query($sql_cmd);

// $export = array();
// while($rec = $sql_result->fetch_assoc() ){
//     //echo jason_encode($sec);
//     $export[] =$rec;
// }
//     echo json_encode($export);
//     $conn = null
    
    foreach ($conn->query($sql_cmd) as $rec) {
      $export[] = $rec;
    }
    echo json_encode($export);
    $conn = null;
?>