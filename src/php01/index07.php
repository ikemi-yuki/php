<?php
function text($number1, $number2) {
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 3);
echo $total;

function score($score1, $score2, $score3) {
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo "合計点は" . $sum . "なので合格です";
    } else {
        echo "合計点は" . $sum . "なので不合格です";
    }
}

echo (score(50,80,90));

function getTriangleArea($bottom, $height) {
    return $bottom * $height / 2;
}

function getSquareArea($bottom, $height) {
    return $bottom * $height;
}

function getTrapezoidArea($top, $bottom, $height) {
    return (($top + $bottom) * $height / 2);
}

echo getTriangleArea(5, 6);

echo getSquareArea(2, 3);

echo getTrapezoidArea(2, 3, 6);

