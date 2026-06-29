<?php
function mygenetaro()
{
    yield 'value1';
    yield 'value2';
    yield 'value3';
}
foreach (mygenetaro() as $yieldedValue) {
    echo $yieldedValue . PHP_EOL;
}
