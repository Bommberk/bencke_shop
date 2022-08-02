<div class="container-cart">
    
    <?php

global $database;

$data = $database->select("warenkorb",[
    "name",
    "id",
    "preis",
    "bild",
],["user_id" => $_SESSION["user_id"]]);

$data = json_decode(json_encode($data));

$zähler = count($data);


$icon_trash = "<span class='material-symbols-outlined'>delete</span>";


if($zähler != 0){
    
       echo "<div class='headlines'>
            <h2>Produkte</h2>
            <h2>Preise</h2>
        </div>";

    foreach($data as $hallo){
        echo "
        <div class='daten'>
            <a href='?page=remove&id=".$hallo->id."'>".$icon_trash."</a>"
                .$hallo->bild."
                <p>".$hallo->name."</p>
                <p>".$hallo->preis."</p>
            </div>
            ";

            // $summe = $hallo->preis;

            // echo $summe;

            // $summe = array_sum($summe);

        }



        echo "<a class='btn-buy' href='?page=buy'>Weiter zur Kasse</a>";

    }else{
        echo "<b>Dein Warenkorb ist Leer</b>.";
    }
        

    


    ?>
</div>

<link rel="stylesheet" href="../assets/css/cart.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />