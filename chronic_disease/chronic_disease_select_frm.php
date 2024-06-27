<?php
include "../db_connect.php";
// $sql_cmd = "SELECT * FROM `chronic_disease` 
// WHERE 
//       IDCard LIKE '%{$y->nah}%' OR
//       CdisID LIKE '%{$y->nah}%' OR
//       ID_Year LIKE '%{$y->nah}%' OR
//       CdisName LIKE '%{$y->nah}%'; LIMIT 10";
// $sql_cmd = "SELECT * FROM `chronic_disease` LIMIT 10";
//var_dump($y) ;LIMIT 15
// " SELECT eye_results.IDCard, eye_results.Results_eyeID, eye_results.ID_Year, eyename.eye_name	
//   FROM `eye_results`
//   INNER JOIN eyename ON eye_results.Results_eyeID=eyename.Results_eyeID; LIMIT 15";
if(empty($y)){
  $sql_cmd = "SELECT chronic_disease.IDCard, chronic_disease.CdisID, chronic_disease.ID_Year, cdisname.CdisName 
              FROM `chronic_disease` 
              INNER JOIN cdisname ON chronic_disease.CdisID=cdisname.CdisID; limit 10";
}else{  
$sql_cmd = "SELECT chronic_disease.IDCard, chronic_disease.CdisID, chronic_disease.ID_Year, cdisname.CdisName 
            FROM `chronic_disease` 
            INNER JOIN cdisname ON chronic_disease.CdisID=CdisName.CdisID
            WHERE IDCard LIKE '%{$y->nah}%' or 
                  chronic_disease.CdisID LIKE '%{$y->nah}%' or 
                  ID_Year LIKE '%{$y->nah}%'or 
                  cdisname.CdisName LIKE '%{$y->nah}%' limit 10";
// ในselectจะไม่เหมือน ลบเพิ่มแก้ไข
}

  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null
  
?>