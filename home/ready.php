<?php

    global $database;

    $database->delete("warenkorb",[]);

    header("location: ?page=shop");


?>