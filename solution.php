<?php

function getMirrorMatrix(array $matrix)
{
    $size = count($matrix);
    $middle = $size / 2;
    $mirrowedMatrix = [];

    foreach ($matrix as $row) {
        $leftHalf = array_slice($row, 0, $middle);
        $mirrowedMatrix[] = [...$leftHalf, ...array_reverse($leftHalf)];
    }

    return $mirrowedMatrix;
}

$result = getMirrorMatrix([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]);

echo '<pre>';
print_r($result);
echo '</pre>';