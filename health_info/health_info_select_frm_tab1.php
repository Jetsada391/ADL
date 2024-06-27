<?php
include "../db_connect.php";
$y = json_decode(file_get_contents('php://input'));

if(empty($y)){
$sql_cmd = "SELECT health_info.IDCard, health_info.ID_Year, health_info.Wg, health_info.Hg,
                     health_info.Wline, bp1name.bp1name, cdis1name.Cdis1name,
                     phydisname1.Phydisname, smokingname.Smoking_name, 
                     alcoholname.Alcohol_name,  mactname.Mact_Name
              FROM `health_info` 
              INNER JOIN bp1name ON health_info.BP1=bp1name.bp1_ID
              INNER JOIN cdis1name ON health_info.Cdis1=cdis1name.Cdis1
              INNER JOIN phydisname1 ON health_info.Phydis=phydisname1.Phydis
              INNER JOIN smokingname ON health_info.Smoking=smokingname.Smoking_ID
              INNER JOIN alcoholname ON health_info.Alcohol=alcoholname.Alcohol_ID
              INNER JOIN mactname ON health_info.Mact=mactname.Mact_ID limit 5";
}else{

  $sql_cmd = "SELECT health_info.IDCard, health_info.ID_Year, health_info.Wg, health_info.Hg,
                     health_info.Wline, bp1name.bp1name, cdis1name.Cdis1name,
                     phydisname1.Phydisname, smokingname.Smoking_name, 
                     alcoholname.Alcohol_name,  mactname.Mact_Name
              FROM `health_info` 
              INNER JOIN bp1name ON health_info.BP1=bp1name.bp1_ID
              INNER JOIN cdis1name ON health_info.Cdis1=cdis1name.Cdis1
              INNER JOIN phydisname1 ON health_info.Phydis=phydisname1.Phydis
              INNER JOIN smokingname ON health_info.Smoking=smokingname.Smoking_ID
              INNER JOIN alcoholname ON health_info.Alcohol=alcoholname.Alcohol_ID
              INNER JOIN mactname ON health_info.Mact=mactname.Mact_ID 
              
              WHERE IDCard LIKE '%{$y->nah}%' or
                    ID_Year LIKE '%{$y->nah}%'or 
                    Wg LIKE '%{$y->nah}%'or 
                    Hg LIKE '%{$y->nah}%'or 
                    Wline LIKE '%{$y->nah}%' or
                    health_info.BP1 LIKE '%{$y->nah}%'or 
                    health_info.Cdis1 LIKE '%{$y->nah}%'or 
                    health_info.Phydis LIKE '%{$y->nah}%'or 
                    health_info.Smoking LIKE '%{$y->nah}%'or 
                    health_info.Alcohol LIKE '%{$y->nah}%'or 
                    health_info.Mact LIKE '%{$y->nah}%' limit 5";

}

foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;

?>
