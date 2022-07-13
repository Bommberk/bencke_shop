<link rel="stylesheet" href="../assets/css/buy.css">

<div class="container-buy">
    <div class="box-buy">
        <form action="?page=ready" method="POST">
            <input placeholder="Vorname" type="text" name="" id=""><br>
            <input placeholder="Nachname" type="text" name="" id=""><br>
            <input placeholder="Postleitzahl" type="text" name="" id=""><br>
            <input placeholder="Ort / Stadt" type="text" name="" id=""><br>
            <input placeholder="name@beispiel.com" type="email" name="" id=""><br>
            <input type="submit" value="Kauf tätigen" name="alert">
            <a class='abbruch' href="?page=cart">Abbrechen</a>
        </form>
    </div>
</div>

    
<?php

    echo "<script>alert('!!!Vorsicht!!! Auch wenn Sie alles ausfüllen wird nichts Bestellt. Dies ist eine reine test Webseite ;)')</script>";

?>