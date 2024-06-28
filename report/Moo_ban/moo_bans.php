<?php
include "../../db_connect.php";
// รับข้อมูลที่ส่งมา
// $y = json_decode(file_get_contents('php://input'));
// ข้อมูลจาก data: '',นะจ้ะไม่ใช้


if(empty($y)){

  $sql_cmd = "SELECT * FROM `moo_ban`";
}else{
  if( Is_numeric($y->nah)){
        $sql_cmd = "SELECT * FROM `moo_ban`
                WHERE 
                  ID_Year LIKE '{$y->nah}' OR
                  moo LIKE '{$y->nah}' OR
                  amount >= '{$y->nah}' ";
    }else{
        $sql_cmd = "SELECT * FROM `moo_ban`
                WHERE 
                  Resualt_ADL LIKE '%{$y->nah}%' 
                   ";

    }
  
}
// echo $sql_cmd;





foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;
?>



