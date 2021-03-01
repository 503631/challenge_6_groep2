<?php 

if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $naam = htmlspecialchars($_POST['naam']);
    // $images =  htmlspecialchars($_POST['image']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brandstof =  htmlspecialchars($_POST['brand_stof']);
    $newOfTwee =   htmlspecialchars($_POST['new_twee']);

    // $query = "UPDATE autos_test SET 'naam' = ?, 'foto' =?, 'merken' = ?, 'prijs' = ?, 'jaar' = ?, 'brand_stof' = ?, 'new_twee' = ?,  WHERE 'id' = ? ";
    $sql = "INSERT INTO autos_test (naam, merken, jaar, prijs, brand_stof, new_twee) WHERE id = $id  Values (?,?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    try{
        $stmt = $stmt->execute(array($naam, $images, $merken, $jaar, $prijs, $brandstof, $newOfTwee));
           echo "<script>
                    alert('Profiel is geupdate');
                    location.href='index.php?page=webshop'; 
                 </script>";
    }catch(PDOExCeption $e){
          echo $e->getMessage();
    }
}

