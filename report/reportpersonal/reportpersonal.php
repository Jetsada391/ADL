<?php
// รับข้อมูลที่ส่งมา




include "../../db_connect.php";
// ข้อมูลจาก data: '',นะจ้ะไม่ใช้



if (empty($y)) {
  $sql_cmd = "SELECT * FROM `reportpersonal`ORDER BY ID_year ASC ";
} else if (empty($y->Moo)){
  $sql_cmd =   "SELECT * FROM `reportpersonal` WHERE  ID_year BETWEEN $y->start_year AND $y->end_year  ORDER BY ID_year  ,CAST(Moo as int) ASC";

}else if (empty($y->adl)){
  $sql_cmd =   "SELECT * FROM `reportpersonal` WHERE Moo = '$y->Moo' AND ID_year BETWEEN $y->start_year AND $y->end_year  ORDER BY ID_year ,Moo ASC";

}
else{
  $sql_cmd =   "SELECT * FROM `reportpersonal` WHERE Moo LIKE $y->Moo   AND Resualt_ADL LIKE '$y->adl'
                              AND ID_year  BETWEEN $y->start_year AND $y->end_year  ORDER BY ID_year ,CAST(Moo as int) ASC";
  // SELECT * FROM `year`  WHERE Moo = 4 AND ID_Year BETWEEN 2565 AND 2566 

}
// echo $y;

// echo $sql_cmd;

// if (empty($y)) {
//   $sql_cmd = "SELECT * FROM `year`";
// } else {
//   // Assuming `$y->nah` contains a value
//   if (strpos($y->nah, 'Moo') !== false) {
//       $sql_cmd = "SELECT * FROM `year` WHERE Moo=4;
//       ";
//   } else {
//       // Assuming `$y->nah` contains a value to filter `Resualt_ADL` column
      
//     }
//   }





foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;
?>



