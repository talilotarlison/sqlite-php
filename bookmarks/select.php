<?php

$db = new SQLite3('db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);
//$db->close();

$result = $db->query('SELECT * FROM Users');
//var_dump($result->fetchArray());



$arr = [];


while ($dados = $result->fetchArray(SQLITE3_ASSOC)) {
    // code...
  array_push($arr,$dados);
} 

foreach ($arr as $key => $value) {
   echo $value['sobrenome'];
}

//var_dump($arr); 

?>