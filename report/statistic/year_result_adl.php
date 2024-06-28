<?php
include "../../db_connect.php";
// $y = json_decode(file_get_contents('php://input'));รับข้อมูลที่ส่งมา
// ข้อมูลจาก data: '',นะจ้ะไม่ใช้

$sql_cmd = "SELECT * FROM `year_result_adl`;";

$conn = new mysqli("localhost", 'root', "", 'adl');

foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;
?>