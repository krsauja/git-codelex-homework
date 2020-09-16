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
    private string $model;

    public function __construct(string $carName, int $fuelAmount, string $model)
    {
        parent::__construct($carName, $fuelAmount);

        $this->model = $model;
    }

    public function fuelAmount(): int
    {
        $fuelAmount = parent::fuelAmount();

        return $fuelAmount;
    }
}

class Bmw extends Cars
{
    private string $model;

    public function __construct(string $carName, int $fuelAmount, string $model)
    {
        parent::__construct($carName, $fuelAmount);

        $this->model = $model;
    }
}

$cars = [
    new Audi ('AUDI', 70, 'AUDI A6 B8'),
    new Bmw ('BMW', 65, 'BMW X5 E53'),
];
foreach ($cars as $car)
{
    echo 'Car name: ' . $car->carName() . ' - Fuel Tank Amount: ' . $car->fuelAmount() . ' Litres' . PHP_EOL;
}




?>