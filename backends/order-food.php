<?php

session_start();

try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

	$arr = array ('code'=>"0",'msg'=>"Problém na straně serveru. Zkuste později.");

	echo json_encode($arr);

	exit();
	
}

if (!isset($_SESSION['user']) || !isset($_SESSION['user_id'])) {
	$_SESSION['msg'] = "Musíte být přihlášen, abyste mohl objednávat.";
	header('location: ../menu.php');
	exit();
}

if (!isset($_REQUEST['id'])) {
	$_SESSION['msg'] = "Neplatné menu, zkuste znovu.";
	header('location: ../menu.php');
	exit();
}

date_default_timezone_set("Europe/Prague");

$food_id = $_REQUEST['id'];

$user_name = $_SESSION['user'];

$user_id = $_SESSION['user_id'];

$order_id = "RSTGF" . strval(mt_rand(100000, 999999));

$timest = date("d:m:Y h:i:sa");


$sql = 'INSERT INTO orders(order_id,user_id,food_id,user_name, timestamp) VALUES(?,?,?,?,?);
        UPDATE `food` SET `pocet_porci` = pocet_porci - 1 WHERE `food`.`id` = "'.$_REQUEST['id'].'"';



$query  = $pdoconn->prepare($sql);

if ($query->execute([$order_id, $user_id, $food_id, $user_name, $timest])) {

	$_SESSION['msg'] = 'Objednávka úspěšně poslána! Vaše číslo objednávky je: '.$order_id;

	header('location: ../menu.php');

} else {

	$_SESSION['msg'] = 'Problém na straně serveru. Zkuste později.';

	header('location: ../menu.php');

}