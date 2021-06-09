<?php

include 'connect.php';

// Als er in de url een id is meegegeven van de rij, dan de id aan variabele geven
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// DELETE query maken om rij uit database te kunnen verwijderen
$query = "DELETE FROM taak WHERE id=$id";

// Statement voorbereiden
$stmt = $conn->prepare($query);

// Query uitvoeren
$stmt->execute();

// Weer teruggaan naar index.php
header("location: index.php");
