<?php

use function PHPSTORM_META\sql_injection_subst;

include "../db_connect.php";
$y = json_decode(file_get_contents('php://input'));

// $sql_cmd = "SELECT * FROM `chronic_disease` 
// WHERE 
//       IDCard LIKE '%{$y->nah}%' OR
//       CdisID LIKE '%{$y->nah}%' OR
//       ID_Year LIKE '%{$y->nah}%' OR
//       CdisName LIKE '%{$y->nah}%'; LIMIT 5";

// $sql_cmd = "SELECT * FROM `chronic_disease` LIMIT 5";

// var_dump($y) ;
if(empty($y)){
  $sql_cmd = "SELECT health_info.IDCard, 
                      teethname.Teethname, 
                      results_eye1name.Results_eye1name, 
                      feel_depressedname.Feel_depressedname, 
                      feel_boredname.Feel_boredname,
                      assess_fallname.Assess_fallname,
                      urinaryname.Urinaryname, 
                      assess_sleepname.Assess_sleepname, 
                      sleep_dayname.Sleep_dayname
                        FROM `health_info`
                        INNER JOIN teethname ON health_info.Teeth=teethname.Teeth
                        INNER JOIN results_eye1name ON health_info.Results_eye1=results_eye1name.Results_eye1
                        INNER JOIN feel_depressedname ON health_info.Feel_depressed=feel_depressedname.Feel_depressed
                        INNER JOIN feel_boredname ON health_info.Feel_bored=feel_boredname.Feel_bored
                        INNER JOIN assess_fallname ON health_info.Assess_fall=assess_fallname.Assess_fall
                        INNER JOIN urinaryname ON health_info.Urinary=urinaryname.Urinary
                        INNER JOIN assess_sleepname ON health_info.Assess_sleep=assess_sleepname.Assess_sleep
                        INNER JOIN sleep_dayname ON health_info.Sleep_day=sleep_dayname.Sleep_day limit 5";
             

}else{
$sql_cmd = "SELECT health_info.IDCard, 
                        teethname.Teethname, 
                        results_eye1name.Results_eye1name, 
                        feel_depressedname.Feel_depressedname, 
                        feel_boredname.Feel_boredname,
                        assess_fallname.Assess_fallname,
                        urinaryname.Urinaryname, 
                        assess_sleepname.Assess_sleepname, 
                        sleep_dayname.Sleep_dayname
                FROM `health_info`
                INNER JOIN teethname ON health_info.Teeth=teethname.Teeth
                        INNER JOIN results_eye1name ON health_info.Results_eye1=results_eye1name.Results_eye1
                        INNER JOIN feel_depressedname ON health_info.Feel_depressed=feel_depressedname.Feel_depressed
                        INNER JOIN feel_boredname ON health_info.Feel_bored=feel_boredname.Feel_bored
                        INNER JOIN assess_fallname ON health_info.Assess_fall=assess_fallname.Assess_fall
                        INNER JOIN urinaryname ON health_info.Urinary=urinaryname.Urinary
                        INNER JOIN assess_sleepname ON health_info.Assess_sleep=assess_sleepname.Assess_sleep
                        INNER JOIN sleep_dayname ON health_info.Sleep_day=sleep_dayname.Sleep_day
              
              WHERE IDCard LIKE '%{$y->nah}%' or
                    
                    teethname.Teethname LIKE '%{$y->nah}%'or
                    results_eye1name.Results_eye1name LIKE '%{$y->nah}%' or 
                    feel_depressedname.Feel_depressedname LIKE '%{$y->nah}%'or
                    feel_boredname.Feel_boredname LIKE '%{$y->nah}%'or 
                    assess_fallname.Assess_fallname LIKE '%{$y->nah}%'or
                    urinaryname.Urinaryname LIKE '%{$y->nah}%'or 
                    assess_sleepname.Assess_sleepname LIKE '%{$y->nah}%'or 
                    sleep_dayname.Sleep_dayname LIKE '%{$y->nah}%' limit 5 ";

}


foreach ($conn->query($sql_cmd) as $rec) {
  $export[] = $rec;
}
echo json_encode($export);
$conn = null;

?>