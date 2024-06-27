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
  $sql_cmd = "SELECT s_income.IDCard, s_income.ID_Year, s_income.S_incomeID ,s_incomename.S_incomeName 
              FROM `s_income` 
              INNER JOIN s_incomename ON s_income.S_incomeID=s_incomename.S_incomeID; limit 10";


}else{
  
$sql_cmd = "SELECT s_income.IDCard, s_income.ID_Year, s_income.S_incomeID ,s_incomename.S_incomeName 
            FROM `s_income` 
            INNER JOIN s_incomename ON s_income.S_incomeID=s_incomename.S_incomeID
            WHERE IDCard LIKE '%{$y->nah}%' or 
                  ID_Year LIKE '%{$y->nah}%' or
                  s_income.S_incomeID LIKE '%{$y->nah}%' or
                  s_incomename.S_incomeName LIKE '%{$y->nah}%' limit 10";

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
//   $conn->close()
  
  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null;
?>
