<?php
        include '../dbconfig.php';

        $query = "SELECT id FROM user WHERE usertype='staff' ORDER BY id";
        $query_run = mysqli_query($data, $query);

        $row = mysqli_num_rows($query_run);


    ?>