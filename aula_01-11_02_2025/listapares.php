<?php
echo "<h2>Números pares de 1 a 20:</h2>";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>