<?php
include "../db_connect.php";



    $sql_cmd = "SELECT * FROM `eduname` ORDER BY `eduname`.`Edu_ID` ASC
                ;";
  

  $sql_result = $conn->query($sql_cmd);

  $result = $sql_result->fetchALL(PDO::FETCH_ASSOC);

  echo json_encode($result);
  $conn = null;
?>

    