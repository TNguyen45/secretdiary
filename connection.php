<?php

    $link = mysqli_connect("database_host", "your_username", "your_database_password", "your_database_name");

    if (mysqli_connect_error()) {

        die ("Database connection error");

    }

?>
