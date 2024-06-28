<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `situation` (`IDCard`,`ID_Year`,  `SituID`, `situname`) 
            VALUES ('{$y->a}', '{$y->d}','{$y->b}', '{$y->c}');";

// echo $sql_cmd;
if ($conn->query($sql_cmd) === TRUE) 
{
  echo "1";
} else {
  echo "0";

}
$conn->close();

?>
