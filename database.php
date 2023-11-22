<?php
$database='portfolio';
$user='root';
$locahost='localhost';
$password='';
$options=[
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];
try{
    $db=new PDO('mysql:host='.$locahost.';dbname='.$database,$user,$password,$options);
}catch(Exception $e){
    echo $e;
}




?>