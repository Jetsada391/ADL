<?php
include "../db_connect.php";

// $sql_cmd = "SELECT * FROM `chronic_disease` 
// WHERE 
//       IDCard LIKE '%{$y->nah}%' OR
//       CdisID LIKE '%{$y->nah}%' OR
//       ID_Year LIKE '%{$y->nah}%' OR
//       CdisName LIKE '%{$y->nah}%'; LIMIT 10";

// $sql_cmd = "SELECT * FROM `chronic_disease` LIMIT 10";

//var_dump($y) ;LIMIT 15

if(empty($y)){
  $sql_cmd = "SELECT phydis.IDCard, phydis.ID_Year, 
                    phydis.PhydisID ,phydisname.Phydis_name
              FROM `phydis` 
              INNER JOIN phydisname ON phydis.PhydisID=phydisname.Phydis_ID;";

}else{
  
$sql_cmd = "SELECT phydis.IDCard, phydis.ID_Year, 
                  phydis.PhydisID ,phydisname.Phydis_name
            FROM `phydis` 
            INNER JOIN phydisname ON phydis.PhydisID=phydisname.Phydis_ID

            WHERE IDCard LIKE '%{$y->nah}%' or 
                  phydis.PhydisID LIKE '%{$y->nah}%'or 
                  ID_Year LIKE '%{$y->nah}%'or 
                  phydisname.Phydis_name LIKE '%{$y->nah}%' ";


}
//echo $sql_cmd;




// $conn = new mysqli("localhost", 'root', "", 'adl');

// $sql_result = $conn->query($sql_cmd);

// $export = array();
// while($rec = $sql_result->fetch_assoc() ){
//     //echo jason_encode($sec);
//     $export[] =$rec;
// }
//     echo json_encode($export);
//   $conn->close()
  
  foreach ($conn->query($sql_cmd) as $rec) {
    $export[] = $rec;
  }
  echo json_encode($export);
  $conn = null;
?>





