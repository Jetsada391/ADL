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
  $sql_cmd = "SELECT personal.IDCard, personal.ID_Year, personal.Name ,personal.Num_Home, personal.Moo 
                    ,personal.Phone , statusname.Status_name  ,eduname.Edu_name,income_name.incomename
              FROM `personal` 
              INNER JOIN statusname ON personal.Status=statusname.status_ID
              INNER JOIN eduname ON personal.Edu=eduname.Edu_ID
              INNER JOIN income_name ON personal.Income=income_name.income_ID
              ORDER BY personal.Name;";

}else{
  
$sql_cmd =  "SELECT personal.IDCard, personal.ID_Year, personal.Name ,personal.Num_Home, personal.Moo 
                    ,personal.Phone , statusname.Status_name  ,eduname.Edu_name,income_name.incomename
            FROM `personal` 
            INNER JOIN statusname ON personal.Status=statusname.status_ID
            INNER JOIN eduname ON personal.Edu=eduname.Edu_ID
            INNER JOIN income_name ON personal.Income=income_name.income_ID
            WHERE IDCard LIKE '%{$y->nah}%' OR 
                  `Name` LIKE '%{$y->nah}%' OR 
                  Num_Home LIKE '%{$y->nah}%' OR
                  Moo LIKE '%{$y->nah}%' OR
                  Tb LIKE '%{$y->nah}%' OR 
                  Amp LIKE '%{$y->nah}%' OR 
                  Prov LIKE '%{$y->nah}%' OR 
                  Phone LIKE '%{$y->nah}%' OR 
                  personal.Status LIKE '%{$y->nah}%' OR 
                  personal.Edu LIKE '%{$y->nah}%' OR 
                  personal.Income LIKE '%{$y->nah}%'OR
                  statusname.Status_name LIKE '%{$y->nah}%' OR 
                  eduname.Edu_name LIKE '%{$y->nah}%' OR 
                  income_name.incomename LIKE '%{$y->nah}%'
            ORDER BY personal.Name;";


}
  
  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null;
?>



