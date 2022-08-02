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

<style>
    .container-cart
{
    position: absolute;
    margin-top: 200px;
    text-align: center;
    left: calc(50% - 400px);
}
.headlines
{
    display: flex;
    margin-left: 30px;
}
h2:nth-child(2)
{
    position: absolute;
    right: 40px;
}
.bilder
{
    width: 80px;
    height: 80px;
    margin-right: 20px;
    border-radius: 50%;
}
p
{
    font-size: 2em;
}
.bilder,
p
{
    margin: 10px;
}
p:nth-child(4)
{
    right: 20px;
    position: absolute;
}
.daten
{
    display: flex;
    align-items: center;
    background: transparent;
    width: 800px;
    border-top: 1px solid grey;
    border-bottom: 1px solid grey;
    margin-left: 0px;
}
span
{
    font-size: 1.3em;
    color: #212529;
    text-decoration: none;
    transition: 0.2s;
}
span:hover
{
    color: #7a7a7a;
}
.btn-buy
{
    font-size: 1.3em;
    background: #212529;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    margin-top: 20px;
    float: right;
    position: relative;
    transition: 0.3s;
    transition-delay: 0.1s;
}
.btn-buy::before
{
    content: 'Weiter zur Kasse';
    position: absolute;
    background: #212529;
    inset: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
}
.btn-buy:hover
{
    background: grey;
}
.btn-buy:hover::before
{
    background: grey;
}
@media(max-width: 860px)
{
    .container-cart .daten
    {
        width: 400px;
        margin-left: 50%;
        height: 80px;
        position: relative;
    }
    .daten .bilder
    {
        height: 70px;
        width: 70px;
    }
    .daten p
    {
        font-size: 1.3em;
    }
    .daten p:nth-child(4)
    {
        position: absolute;
        left: 320px;
    }
    .headlines h2
    {
        font-size: 1.1em;
        margin-left: 50%;
    }
    .headlines h2:nth-child(2)
    {
        left: 320px;
    }
    .daten span
    {
        font-size: 1.1em;
    }
    .btn-buy
    {
        font-size: 1em;
    }
}
</style>

<!-- <link rel="stylesheet" href="../assets/css/cart.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />