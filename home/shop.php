<div class="container-shop">
<?php

    global $database;

    
    $data = $database->select("produkte",[
        "name",
        "preis",
        "beschreibung",
        "bild",
    ]);

    $data = json_decode(json_encode($data));
    
    
    foreach($data as $hallo){
        

        echo "
            <div class='box'>
                <div class='bild'>
                    ".$hallo->bild."
                </div>
                <div class='beschreibung'>
                    <p>".$hallo->beschreibung."</p>
                    <form action='?page=shop' method='POST'>
                        <input type='hidden' value='".$hallo->name."' name='name'><br>
                        <input type='hidden' value='".$hallo->preis."' name='preis'><br>
                        <input type='hidden' value='".$hallo->bild."' name='bild'><br>
                        <input type='submit' value='In den Warenkorb'>
                    </form>
                </div>
            </div>
        ";

    }

    
    if(isset($_POST["name"])){

        $database->insert("warenkorb",[
            "name" => $_POST["name"],
            "preis" => $_POST["preis"],
            "bild" => $_POST["bild"],
            "user_id" => $_SESSION["user_id"],
        ]);


    }

?>


</div>
<link rel="stylesheet" href="../assets/css/shop.css">

