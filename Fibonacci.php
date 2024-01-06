<?php

function fibonacci($n) {
    $fib_sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fib_sequence[] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
    }

    return $fib_sequence;
}

function sum_of_fibonacci($n) {
    return array_sum(fibonacci($n));
}

// Приклад використання:
$n = 10;
$result = fibonacci($n);
$sum = sum_of_fibonacci($n);

echo "Послідовність Фібоначчі для $n чисел: " . implode(', ', $result) . PHP_EOL;
echo "Сума чисел Фібоначчі: $sum" . PHP_EOL;

?>
