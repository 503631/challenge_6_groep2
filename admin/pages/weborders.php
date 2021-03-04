<?php
// include_once("./connection.inc.php");
if (isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
            alert('U heeft geen toegang tot deze pagina.');
            location.href='../index.php';
        </script>";
}
?>
<?php



if (isset(($_POST['id']))) {
    $id = $_POST['id'];
    

    include("offertes_delete.php");
    
  }




$sql = "SELECT * FROM offertes" ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result


foreach ($result as $key => $row)  {
    $id = $row['id'];
    $auto_id = $row['auto_id'];
    $klant_id = $row['klant_id'];


    $sql = "SELECT * FROM autos_test where id = $auto_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();   
    $result = $stmt->fetchAll(); // get result
    
    foreach ($result as $key => $row)  {
        $naam = $row['naam'];
        // $img = $row['foto'];
        $merken = $row['merken'];
        $prijs = $row['prijs'];
        $jaar = $row['jaar'];
    }       
    
        $sql = "SELECT * FROM klant where id = $klant_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach ($result as $key => $row)  {
            $voornaam = $row['voornaam'];
            $email = $row['email'];

    }

    include("offertes.php");

}  










