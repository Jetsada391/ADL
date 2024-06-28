<?php
// รับข้อมูลที่ส่งมา




include "../../db_connect.php";
// ข้อมูลจาก data: '',นะจ้ะไม่ใช้



if (empty($y)) {
  $sql_cmd = "SELECT * FROM `year`ORDER BY ID_year ASC ";
} else if (empty($y->moo)){
  $sql_cmd =   "SELECT * FROM `year` WHERE  ID_year BETWEEN $y->start_year AND $y->end_year  ORDER BY ID_year ASC";

}else{
  $sql_cmd =   "SELECT * FROM `year` WHERE Moo LIKE $y->moo AND ID_year BETWEEN $y->start_year AND $y->end_year  ORDER BY ID_year ASC";
  // SELECT * FROM `year`  WHERE Moo = 4 AND ID_Year BETWEEN 2565 AND 2566 

}



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


// echo $sql_cmd;






foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;
?>



