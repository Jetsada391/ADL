<?php
include "../db_connect.php";




  $sql_cmd = "SELECT * FROM `adl1` ORDER BY `adl`.`adl1`,`adl`.`2`,`adl`.`adl3`,`adl`.`adl4`,`adl`.`adl5`,`adl`.`adl6`,`adl`.`adl7`,`adl`.`adl8`,`adl`.`adl9`,`adl`.`adl10`, ASC 
              ;";

$sql_result = $conn->query($sql_cmd);

$result = $sql_result->fetchALL(PDO::FETCH_ASSOC);
// $export = array();
// while ($rec = $sql_result->fetch_assoc()) {
//   //echo jason_encode($sec);
//   $export[] = $rec;
//   }
//   echo json_encode($export);
echo json_encode($result);
$conn = null;
?>

    