<?php


include("../Medoo.php");
    
    
         
// Using Medoo namespace.

use Medoo\Medoo;
 
$database = new Medoo([
    // [required]
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 's5418_bencke',
    'username' => 's5418_bencke',
    'password' => '7sp4qM#86',
 
    // [optional]
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'port' => 3306,
 
    // [optional] The table prefix. All table names will be prefixed as PREFIX_table.
    'prefix' => '',
 
    // [optional] To enable logging. It is disabled by default for better performance.
    'logging' => true,
 
    // [optional]
    // Error mode
    // Error handling strategies when the error is occurred.
    // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
    // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
    'error' => PDO::ERRMODE_SILENT,
 
    // [optional]
    // The driver_option for connection.
    // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],
 
    // [optional] Medoo will execute those commands after the database is connected.
    'command' => [
        'SET SQL_MODE=ANSI_QUOTES'
    ]
]);


    session_start();

    $data = $database->select("warenkorb",[
        "name",
    ],["user_id" => $_SESSION["user_id"]]);

    $zähler = count($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="btn-home">
                <a href="?page=home">Bencke</a>
            </div>
            <div class="links">
                <a href="?page=shop">Zum Shop</a>
                <a href="?page=cart">Warenkorb(<?=$zähler?>)</a>
                <div class="icons" onclick="menu()">
                    <i id="bars" class="fa-solid fa-bars"></i>
                    <i id="x" class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

<?php



    if(isset($_SESSION["user_log"]) && $_SESSION["user_log"] == true){

        if(isset($_GET["page"])){
            switch($_GET["page"]){
                case "shop"   : include("shop.php");break;
                case "home"   : include("home.php");break;
                case "cart"   : include("cart.php");break;
                case "cart"   : include("cart.php");break;
                case "remove" : include("remove.php");break;
                case "buy"    : include("buy.php");break;
                case "ready"  : include("ready.php");break;
                default       : include("home.php");
            }
        }else{
            include("home.php");
        }
        


    }else{
        header("location: /bencke_datenbank/?page=login");
    }

?>

<script src="https://kit.fontawesome.com/350675982b.js" crossorigin="anonymous"></script>
<script src="../assets/script/script.js"></script>