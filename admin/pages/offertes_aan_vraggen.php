<?php
include_once("./connection.inc.php");
$auto_id = $_POST['id'];
$klant_id = $_SESSION["USER_ID"];


$sql = "INSERT INTO offertes (auto_id,  klant_id ) Values ('$auto_id','$klant_id')"; 
$stmt = $pdo->prepare($sql);
$stmt->execute();


echo "<h1>offertes aan gevraagd</h1>";