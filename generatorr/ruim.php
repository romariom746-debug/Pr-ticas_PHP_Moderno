<?php
function makerange($length)
{
    $dataset = [];
    for ($i = 0; $i < $length; $i++) {
        $dataset[] = $i;
    }
    return $dataset;
}

$customrange = makerange(1000);
foreach ($customrange as $value) {
    echo $value . PHP_EOL;
}
