<?php

$config['database']['host']='localhost';
$config['database']['username']='root';
$config['database']['password']='8epecAfe';
$config['database']['database']='byylive_db';

$conn=new mysqli($config['database']['host'],$config['database']['username'],$config['database']['password'],$config['database']['database']);

var_dump($conn);
