<?php


class Cars
{
    private int $fuelAmount;
    private string $carName;

    public function __construct(string $carName, int $fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
        $this->carName = $carName;
    }
    public function carName(): string
    {
        return $this->carName;
    }

    public function fuelAmount(): int
    {
        return $this->fuelAmount;
    }
}

class Audi extends Cars
{
    public function  audiFeature(): string
    {
        return 'Armor';
    }
}

class Bmw extends Cars
{
    public function  BmwFeature(): string
    {
        return 'Unbreakable';
    }
}

$cars = [
    new Audi ('AUDI', 70),
    new Bmw ('BMW', 65),
];
foreach ($cars as $car)
{
    echo 'Car name: ' . $car->carName() . ' - Fuel Tank Amount: ' . $car->fuelAmount() . ' Litres' . PHP_EOL;

    if ($car instanceof  Audi)
    {
        echo $car->audiFeature();
    }

    if ($car instanceof  Bmw)
    {
        echo $car->bmwFeature();
    }

    echo PHP_EOL;
}




?>