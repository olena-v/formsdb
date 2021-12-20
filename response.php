<?php

$data=[
	'name'=>$_POST['name'],
	'phone'=>$_POST['phone'],
	'comment'=>$_POST['comment']
];

$connect=new PDO('mysql:host=localhost;dbname=formsbd', 'root', '');
$add='INSERT INTO form (name, phone, comment) VALUES(:name, :phone, :comment)';
$statement=$connect->prepare($add);
$result=$statement->execute($data);

