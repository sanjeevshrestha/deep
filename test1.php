<?php

$config['database']['host']='localhost';
$config['database']['username']='xxxxx';
$config['database']['password']='xxxxx';
$config['database']['database']='xxxxx';

$conn=new mysqli($config['database']['host'],$config['database']['username'],$config['database']['password'],$config['database']['database']);

var_dump($conn);
