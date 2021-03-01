<?php
$sql = "SELECT * FROM autos_test LIMIT 4" ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach ($result as $key => $row)  {
    $id = $row['id'];
    $naam = $row['naam'];
    $img = $row['foto'];
    $merken = $row['merken'];
    $prijs = $row['prijs'];

    $sql = "SELECT * FROM photos where auto_id = $id LIMIT 1" ;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    foreach ($result as $key => $row)  {
    $img = $row['name_photos'];
    include("template.php");
    }
    }