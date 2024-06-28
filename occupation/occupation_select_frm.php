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

if(empty($y)){
  $sql_cmd = "SELECT occupation.IDCard, occupation.OccID, occupation.Occ_Year ,occ_name.Occ_Name 
              FROM `occupation` 
              INNER JOIN occ_name ON occupation.OccID=occ_name.OccID;";

}else{
  
$sql_cmd = "SELECT occupation.IDCard, occupation.OccID, occupation.Occ_Year ,occ_name.Occ_Name 
            FROM `occupation` 
            INNER JOIN occ_name ON occupation.OccID=occ_name.OccID
            WHERE IDCard LIKE '%{$y->nah}%' or 
                  occupation.OccID LIKE '%{$y->nah}%'or 
                  occ_name.Occ_Name LIKE '%{$y->nah}%' ";

}
//echo $sql_cmd;



// $conn = new mysqli("localhost", 'root', "", 'adl');

// $sql_result = $conn->query($sql_cmd);

// $export = array();
// while($rec = $sql_result->fetch_assoc() ){
//     //echo jason_encode($sec);
//     $export[] =$rec;
// }
//     echo json_encode($export);
//   $conn->close()
  
  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null;
?>

