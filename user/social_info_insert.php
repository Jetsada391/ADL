<?php
include "db_connect.php";



$sql_cmd = "INSERT INTO `social_info` (`IDCard`, `Soc_Year`,`SocID`) 
            VALUES ('{$y->a}', '{$y->d}','{$y->b}');";

//echo $sql_cmd;
if ($conn->query($sql_cmd) === TRUE) 
{
  echo "1";
} else {
  echo "0";

}
$conn->close();

?>
