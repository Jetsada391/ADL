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
  $sql_cmd = "SELECT preexisting_condition.IDCard, preexisting_condition.ID_Year, 
                    preexisting_condition.PcdisID ,preexisting_conditionname.PcdisName 
              FROM `preexisting_condition` 
              INNER JOIN preexisting_conditionname ON preexisting_condition.PcdisID=preexisting_conditionname.PcdisID;";

}else{
  
$sql_cmd = "SELECT preexisting_condition.IDCard, preexisting_condition.ID_Year, 
                   preexisting_condition.PcdisID ,preexisting_conditionname.PcdisName 
            FROM `preexisting_condition` 
            INNER JOIN preexisting_conditionname ON preexisting_condition.PcdisID=preexisting_conditionname.PcdisID

            WHERE IDCard LIKE '%{$y->nah}%' or 
                  preexisting_condition.PcdisID LIKE '%{$y->nah}%'or 
                  ID_Year LIKE '%{$y->nah}%'or 
                  preexisting_conditionname.PcdisName LIKE '%{$y->nah}%' ";


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





