
    var test = document.getElementById("test");
    var progressbar = document.getElementById("progress");
    var zahl = 0;
    progressbar.value = zahl;
    test.innerHTML = zahl;

function progress(){

    if(zahl != 100){
        zahl++;
        progressbar.value = zahl;
        test.innerHTML = zahl + "%";
    }
}
setInterval(function(){progress()}, 50);
