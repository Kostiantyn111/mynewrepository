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
