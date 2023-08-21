<?php

$result = array();

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $result[] = "BIG BANG";
    } elseif ($i % 3 == 0) {
        $result[] = "BIG";
    } elseif ($i % 5 == 0) {
        $result[] = "BANG";
    } else {
        $result[] = $i;
    }
}

$outputFile = 'output.json';
file_put_contents($outputFile, json_encode($result));

echo "File Complete";

?>
