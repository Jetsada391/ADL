<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `occupation` (`IDCard`, `OccID`, `Occ_Year`,`Occ_Name`) 
            VALUES ('{$y->a}', '{$y->b}', '{$y->d}', '{$y->c}');";

// echo $sql_cmd;
if ($conn->query($sql_cmd) === TRUE) 
{
  echo "1";
} else {
  echo "0";

}
$conn->close();

?>
