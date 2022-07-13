<?php

    global $database;

    if(isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["preis"]) && $_POST["preis"] != "" && isset($_POST["beschreibung"]) && $_POST["beschreibung"] != "" && isset($_POST["bild"]) && $_POST["bild"] != ""){

    $database->insert("produkte",[
        "name" => $_POST["name"],
        "preis" => $_POST["preis"],
        "beschreibung" => $_POST["beschreibung"],
        "bild" => $_POST["bild"],
    ]);

}

?>

<form action="" method="POST">
    <input placeholder="Produktname" type="text" name="name" id=""><br>
    <input placeholder="Preis" type="text" name="preis" id=""><br>
    <input placeholder="Beschreibung" type="text" name="beschreibung" id=""><br>
    <input placeholder="Bild" type="hidden" name="bild" value='<img class="bilder" src="../assets/img/bilderrahmen.png">' id="">
    <input type="submit" value="Einfügen">
</form>