<?php
include "../db_connect.php";




  $sql_cmd = "SELECT * FROM `s_incomename` ORDER BY `s_incomename`.`S_incomeName` DESC
              ;";

  
$sql_result = $conn->query($sql_cmd);

$result = $sql_result->fetchALL(PDO::FETCH_ASSOC); 

  echo json_encode($result);
  $conn = null;
?>

    