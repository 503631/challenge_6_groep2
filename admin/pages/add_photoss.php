<?php

$id = $last_id;
       $ImageName = $NewImageName;
       





    $artikellen = $_FILES['image'];
    $B = 0;
    $a = 3;
    while ($B < $a){
    $sql = "INSERT INTO photos (auto_id,  name_photos ) Values ('$id','$ImageName')"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();    
    $B += 1;
    }