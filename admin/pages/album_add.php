<?php 
if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
include("album_add.inc.php");


if(isset($_POST["submit"])){

   

    $melding = "";
    $naam = htmlspecialchars($_POST['naam']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brand_stof =  htmlspecialchars($_POST['brandstof']);
    $new_twee =   htmlspecialchars($_POST['new_twee']);
    $voorraad =   htmlspecialchars($_POST['voorraad']);
    
    $sql = "INSERT INTO autos_test (id, naam, merken, jaar, prijs, brand_stof, new_twee,voorraad) Values (?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);    
    try{

       $stmt->execute(array(NULL,$naam,$merken,$jaar,$prijs,$brand_stof,$new_twee,$voorraad));
    //    $lastId = $pdo->lastIndertId();
        // $last_id = $conn->insert_id;

    //    echo "$lastId";


    $sql = "SELECT * FROM autos_test" ;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    foreach ($result as $key => $row)  {
        $last_id = $row['id'];

    }
        echo "$last_id";
        //van hier foto's in database toevoegen
        echo "fotos: ";
        print_r($_FILES);
        echo "<br />post: ";
        print_r($_POST);
        // die;

        include_once("add_photos.php"); 


        $melding = "Nieuw album toegevoegd.";
        
    }catch(PDOException $e){
        $melding = "Kon geen nieuw album aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}
