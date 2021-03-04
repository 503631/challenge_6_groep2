<?php

$sql = "DELETE FROM offertes WHERE id = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

