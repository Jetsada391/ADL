<?php
include "../db_connect.php";
$y = json_decode(file_get_contents('php://input'));

// $sql_cmd = "SELECT * FROM `chronic_disease` 
// WHERE 
//       IDCard LIKE '%{$y->nah}%' OR
//       CdisID LIKE '%{$y->nah}%' OR
//       ID_Year LIKE '%{$y->nah}%' OR
//       CdisName LIKE '%{$y->nah}%'; LIMIT 10";

// $sql_cmd = "SELECT * FROM `chronic_disease` LIMIT 10";

//var_dump($y) ;
if(empty($y)){
  $sql_cmd = "SELECT adl1.IDCard,
                     adl1.ID_Year,
                     adl1.ADL1,
                     adl1.ADL2,
                     adl1.ADL3,
                     adl1.ADL4,
                     adl1.ADL5,
                     adl1.ADL6,
                     adl1.ADL7,
                     adl1.ADL8,
                     adl1.ADL9,
                     adl1.ADL10,
                     adl1.Resualt_ADL  FROM `adl1`";
             

}else{
  $sql_cmd = "SELECT adl1.IDCard,
                    adl1.ID_Year,
                    adl1.ADL1,
                    adl1.ADL2,
                    adl1.ADL3,
                    adl1.ADL4,
                    adl1.ADL5,
                    adl1.ADL6,
                    adl1.ADL7,
                    adl1.ADL8,
                    adl1.ADL9,
                    adl1.ADL10,
                    adl1.Resualt_ADL  FROM `adl1`
              
              WHERE IDCard LIKE '%{$y->nah}%' or
                    ID_Year LIKE '%{$y->nah}%' or
                    ADL1 LIKE '%{$y->nah}%'or
                    ADL2 LIKE '%{$y->nah}%'or 
                    ADL3 LIKE '%{$y->nah}%' or 
                    ADL4 LIKE '%{$y->nah}%'or 
                    ADL5 LIKE '%{$y->nah}%'or 
                    ADL6 LIKE '%{$y->nah}%'or
                    ADL7 LIKE '%{$y->nah}%'or 
                    ADL8 LIKE '%{$y->nah}%'or 
                    ADL9 LIKE '%{$y->nah}%'or
                    ADL10 LIKE '%{$y->nah}%'or
                    adl1.Resualt_ADL LIKE '%{$y->nah}%'";

}


// echo $sql_cmd;




// $conn = new mysqli ("localhost", 'root', "", 'adl');

// $sql_result = $conn->query($sql_cmd);

// $export = array();
// while ($rec = $sql_result->fetch_assoc()) {
//   //echo jason_encode($sec);
//   $export[] = $rec;
// }
// echo json_encode($export);
// $conn->close();
foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;
?>