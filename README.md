Я починаю курс PHP в robot_dreams і вже вмію використовувати Git


<?php



function MyFunction($age)
{
    echo PHP_EOL;
    echo "Age of tigre is $age";
    echo PHP_EOL;
}

MyFunction(100);




class Animal
{

    function say()
    {
        echo "I am a animal" . PHP_EOL;
    }
    function work()
    {
        echo "eat meat" . PHP_EOL;
        echo "hunter" . PHP_EOL;
    }

}
class Tigre extends Animal
{

    function say()
    {
        echo "Arrrrrr" . PHP_EOL;
    }
}

class Fish extends Animal
{

    function say()
    {
        echo "....." . PHP_EOL;
    }
}

class Wolf extends Animal
{

    function say()
    {
        echo "I am a wolf" . PHP_EOL;
    }
    function work()
    {
        echo "i eat meat and people" . "\n";
    }
}


$animal = new Animal;
$tigre = new Tigre;
$fish = new Fish;
$wolf = new Wolf;

$animal->say();
$wolf->work();

$fish -> work();









function fibonacciSum($n) {
    $a = 0;
    $b = 1;
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $c = $a + $b;
        $sum += $c;

        $a = $b;
        $b = $c;
    }

    return $sum;
}


$numbers = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, 17711, 28657, 46368, 75025, 121393, 196418, 317811, 514229, 832040, 1346269, 2178309, 3524578];
$totalSum = fibonacciSum(count($numbers));

echo "Сума чисел Фібоначчі: $totalSum";
