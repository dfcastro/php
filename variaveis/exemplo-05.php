<?php
$nome ="frank";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){

    //$nome = "frank2";
echo $nome. "agora teste2";

}
teste();
teste2();
?>