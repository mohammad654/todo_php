<?php

include 'connect.php';

if (isset($_POST['submit'])) {

// Waardes van formulier ophalen en aan variabele geven
    $naam = $_POST['naam'];
    $taakomschrijving = $_POST['taakomschrijving'];
    $deadline = $_POST['deadline'];


        // Query maken om data op de juiste manier toe te voegen aan tabel
        $query = "INSERT INTO taak (naam, taakomschrijving, deadline) VALUES ('$naam', '$taakomschrijving', '$deadline')";

        // Voer de query uit
        $conn->exec($query);

// Weer teruggaan naar index.php
// Ook te voorkomen dat een rij nog een keer wordt toegevoegd bij een refresh
        header("location: index.php");
    }

