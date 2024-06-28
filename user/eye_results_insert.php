<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `eye_results` (`IDCard`, `Results_eyeID`, `ID_Year`, `Results_eyeName	`) 
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
