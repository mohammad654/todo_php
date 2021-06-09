<?php

// Kopieer code van connect.php naar dit bestand
include 'connect.php';

// Als er in de url een id is meegegeven van de rij, dan de id aan variabele geven
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// SELECT query uitvoeren en alle data van rij ophalen
$select = $conn->query("SELECT * FROM taak WHERE id=$id");
$row = $select->fetch();

// Als er op de button van het updateformulier is geklikt, dan de geüpdatete data van een rij verwerken in database
if (isset($_POST['submit'])) {
    
    // Waardes van formulier ophalen en aan variabele geven
    $naam = $_POST['naam'];
    $taakomschrijving = $_POST['taakomschrijving'];
    $deadline = $_POST['deadline'];

    // UPDATE query maken om geüpdatete data van een rij te kunnen verwerken in database
    $query = "UPDATE taak SET naam = '".$naam."',
                            taakomschrijving = '".$taakomschrijving."',
                            deadline = '".$deadline."'
                            WHERE id=$id";

    // Statement voorbereiden
    $stmt = $conn->prepare($query);

    // Query uitvoeren
    $stmt->execute();

    // Weer teruggaan naar index.php
    header("location: index.php");
}

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Opgehaalde data van rij in value attribuut zetten -->

<form method="post" class='text-center mt-3 pt-4' >
        <input type="text"  name="naam" class="form-control" value="<?php echo $row['naam']; ?>"><br>
        <input type="text" name="taakomschrijving" class="form-control" value="<?php echo $row['taakomschrijving']; ?>"><br>
        <input type="date" name="deadline" class="btn btn-outline-secondary mb-2" value="<?php echo $row['deadline']; ?>"><br>
        <input type="submit" name="submit" value="Updaten" class="m-2 btn btn-success"><br>
    </form><br>
