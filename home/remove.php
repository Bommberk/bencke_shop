<?php

    global $database;

    $database->delete("warenkorb",[
        "id" => $_GET["id"],
    ]);

    header("location: ?page=cart");

?>