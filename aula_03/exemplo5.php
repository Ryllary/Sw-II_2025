<?php

function teste($x){
    foreach ($x as $nome) {
        echo "$nome <br>";
    }
}

$vetor = ['Ryllary', 'Zawe', 'São Paulo'];

teste($vetor);
?>