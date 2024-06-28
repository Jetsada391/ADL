<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `sleep_detail` (`IDCard`, `ID_Year`, `sleep_detailID`, `sleep_detailName`) 
            VALUES ('{$y->a}', '{$y->b}', '{$y->c}', '{$y->d}');";

//echo $sql_cmd;
if ($conn->query($sql_cmd) === TRUE) 
{
  echo "1";
} else {
  echo "0";

}
$conn->close();

?>
