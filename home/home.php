<a class="logout" href="/?page=logout">Ausloggen</a>

<?php


    global $database;

    $data = $database->select("logindaten",[
        "benutzername",
    ],["email" => $_SESSION["user_id"]]);

    $data = json_decode(json_encode($data));

    foreach($data as $hallo){
        echo "<h1>Herzlich willkommen <b>".$hallo->benutzername."</h1>";
    }

?>