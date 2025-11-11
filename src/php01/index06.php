<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br />";
}

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count += 1;
        continue;
    }
    echo $count . "<br />";
    $count += 1;
}

$num = 0;

do {
    echo "num = " . $num . "<br />";
    $num += 1;
}   while ($num < 3);

for ($y = 1; $y <=50; $y++) {
    if ($y % 3 === 0 && $y % 5 === 0) {
        echo "FizzBuzz" . "<br />";
    } elseif ($y % 3 === 0) {
        echo "Fizz" . "<br />";
    } elseif ($y % 5 === 0) {
        echo "Buzz" . "<br />";
    } else {
        echo $y . "<br />";
    }
}

for ($f = 1; $f < 6; $f++) {
    for ($g = 1; $g < 6; $g++) {
        echo "●";
    }
    echo "<br />";
}