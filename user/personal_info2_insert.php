<?php
include "db_connect.php";

$sql_cmd = "INSERT INTO `personal` (`Name`, `Moo`, `Num_Home`, `Status`, `Edu`, `Income`) 
            VALUES ('{$y->personal1}', '{$y->personal2}', '{$y->personal3}', '{$y->status}', '{$y->edu}', '{$y->income}');";



// echo $sql_cmd;
// if ($conn->query($sql_cmd) === TRUE) 
// {
//   echo "1";
// } else {
//   echo "0";

// }
// $conn->close();

?>
