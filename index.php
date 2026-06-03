<?php

    include "connection.php";

    $query = "SELECT * FROM prova1";

    $ris = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($ris)) {

        echo $row ["id"] . " - " . $row ["Nome"] . " - " . $row ["Cognome"] . " - " . $row ["numero"] . "<br>";

    }

?>
