<?php

$id = $_POST['id'];


// $merk = $_POST['merk'];
$sql = "SELECT * FROM autos_test where id = '$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach ($result as $key => $row) {
    $id = $row['id'];
    $naam = $row['naam'];
    $merken = $row['merken'];
    $newoud = $row['new_twee'];
    $brandstiof = $row['brand_stof'];
    $prijs = $row['prijs'];
    $jaar = $row['jaar'];


//     $sql = "SELECT * FROM photos where auto_id = $id" ;
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll(); // get result
//     foreach ($result as $key => $row)  {
//     $img = $row['name_photos'];
// }
}
include("sowe.php");
?>