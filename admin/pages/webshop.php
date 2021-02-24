<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webshop</title>
  <link rel="stylesheet" href="css/webshop.css" />
</head>

<body>
  <?php
  if (!isset($_SESSION["ID"]) && $_SESSION["STATUS"] != "ACTIEF") {
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
  }
  ?>
  <!--Dit is het zoekformulier -->
  <script src="js/webshop.js"></script>
  <div class="content">
    <form name="search" id="search" action="" method="POST">
      <div style="background-color:#C2F98E; height:25px; margin-top:5%; padding:0;">
        <input type="text" style="float:left; width:70%;" id="patroon" name="patroon" placeholder="Zoek albums" />
        <input type="submit" style="float:none; width:10%; font-size: 1.2rem;" id="zoeken" name="zoeken" value="&#128270;" /> </br>
      </div>
    </form>
  </div>

  <?php

  ///Hier wordt de sql -opdracht gegenereerd
  if (isset($_POST["zoeken"]) && !empty($_POST["patroon"])) {
    $patroon = htmlspecialchars($_POST["patroon"]);
    $sql = "SELECT * FROM autos_test WHERE naam LIKE '%$patroon' || merken LIKE '%$patroon%' || jaar LIKE '%$patroon%'";
  } else {
    $sql = "SELECT * FROM autos_test";
  }

  ?>



<?php
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach ($result as $key => $row)  {
    $id = $row['id'];
    $naam = $row['naam'];
    $img = $row['foto'];
    $merken = $row['merken'];
    $prijs = $row['prijs'];
    $jaar = $row['jaar'];
    include("template.php");
}