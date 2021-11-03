<?php

function getChunked(array $array, int $chunk)
{
    $chunkedPairs = mb_str_split(join('', $array), $chunk);
    $chunked = array_map(fn($item) => mb_str_split($item), $chunkedPairs);

    return $chunked;
}

$arr = [1, 2, 3, 4, 5];

echo '<pre>';
print_r(getChunked($arr,  3));
echo '</pre>';