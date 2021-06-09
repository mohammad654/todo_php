<?php

include 'connect.php';
include 'header.php';
?>

<h1 class="text-center pt-4">Become a High Performer</h1>
<!-- Formulier om een taak te versturen naar de database en in de taak tabel -->
    <form method="post" action="create.php " class='text-center ' >
        <input type="text" placeholder="Naam" name="naam" class="form-control" required><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving" class="form-control" required><br>
        <input type="date" name="deadline" class=" btn btn-outline-secondary mb-2" required><br>
        <input type="submit" name="submit" value="Verzenden" class="m-2 btn btn-success"><br>
    </form><br>


    <?php include 'read.php'; ?>
    <?php include 'footer.php'; ?>
