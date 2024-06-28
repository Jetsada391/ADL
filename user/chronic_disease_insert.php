<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `chronic_disease` (`IDCard`, `CdisID`, `ID_Year`, `CdisName`) 
            VALUES ('{$y->a}', '{$y->d}','{$y->b}', '{$y->c}')";
// echo $sql_cmd;
if ($conn->query($sql_cmd) === TRUE) 
{
  echo "1";
} else {
  echo "0";

}
$conn->close();

?>