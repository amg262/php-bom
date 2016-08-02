<?php

include_once('classes/Part.php');
include_once('classes/Subassembly.php');
include_once('classes/Assembly.php');

$one = new Part('1','one','one','1.00');
$two = new Part('2','two','two','2.00');
$tre = new Part('3','3','on3e','3.00');
$for = new Part('4','for','for','1.00');
$fiv = new Part('5','one','one','1.00');

$arr = array($one, $two, $tre, $for, $fiv);

$sub = new Subassembly('2');
$sub->setPart($one, '2');
//$sub->setPart($one, '2');
$sub_2 = new Subassembly(('3'));
$sub_2->setPart($for, '5');
$sub_2->setPart($sub, '2');

$ass = new Assembly('12');
$ass->setPart($sub, '1');
$ass->setPart($sub_2, '1');

var_dump($ass->getComponents());

$user = 'root';
$password = 'root';
$db = 'sandbox';
$host = '127.0.0.1';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

var_dump(link);