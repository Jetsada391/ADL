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
  $sql_cmd = "SELECT sleep_detail.IDCard, sleep_detail.ID_Year,sleep_detail.sleep_detailID,sleep_detailname.sleep_detailName 
              FROM `sleep_detail` 
              INNER JOIN sleep_detailname ON sleep_detail.sleep_detailID=sleep_detailname.sleep_detailID;";
              
}else{
  
$sql_cmd = "SELECT sleep_detail.IDCard, sleep_detail.ID_Year,sleep_detail.sleep_detailID,sleep_detailname.sleep_detailName 
            FROM `sleep_detail` 
            INNER JOIN situname ON sleep_detail.sleep_detailID=sleep_detailname.sleep_detailID
            WHERE IDCard LIKE '%{$y->nah}%' or 
                  ID_Year LIKE '%{$y->nah}%' or 
                  sleep_detail.sleep_detailID LIKE '%{$y->nah}%'or 
                  sleep_detailname.sleep_detailName LIKE '%{$y->nah}%' ";

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
//   $conn->close();

  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null
?>
