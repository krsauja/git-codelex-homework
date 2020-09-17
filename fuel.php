<?php declare(strict_types=1);

class Cars {

    private string $carModel;
    private string $numberPlate;
    private int $fuelAmount;
    private int $fuelLeft;
    private int $odometer;
    private int $pin;

    public function __construct(
        string $carModel,
        string $numberPlate,
        int $fuelAmount,
        int $odometer,
        int $pin
    )
    {
        $this->carModel = $carModel;
        $this->numberPlate = $numberPlate;
        $this->fuelAmount = $fuelAmount;
        $this->fuelLeft = $fuelAmount;
        $this->odometer = $odometer;
        $this->pin = $pin;
    }

    public function __toString()
    {
        return '[' . $this->carModel . '] [' . $this->numberPlate . '] » ' . 'fuel capacity: ' . $this->fuelAmount . " Liters\n";
    }

    public function getCarModel(): string
    {
        return $this->carModel;
    }

    public function getNumberPlate(): string
    {
        return $this->numberPlate;
    }

    public function getFuelAmount(): int
    {
        return $this->fuelAmount;
    }

    public function burntFuel(): float
    {
        return $this->fuelAmount -= 10;
    }

    public function getOdometer(): int
    {
        return $this->odometer;
    }

    public function increaseOdometer(int $distance) : int
    {
        return $this->odometer += $distance;
    }

    function getPin(): int
    {
        return $this->pin;
    }
}

$audi = new Cars('AUDI A6 B8', 'CUSTOM', 60, 0, 1317);
$bmw = new Cars('BMW X5', 'LV-3333', 80, 0, 1313);
$volvo = new Cars('SCANIA', 'GG-1317', 290, 0, 9999);

echo "Cars available: \n";
$carList =
    [
        $audi,
        $bmw,
        $volvo
    ];
foreach ($carList as $car) {
    echo '## ' . $car;
}

echo "\n";
$input = (int) readline ('Choose car(0-2): ');
$selectCar = $carList[$input];

if ($input !== 0 && $input !== 1 && $input !== 2) {
    echo "Wrong number, try again\n";
    $input = (int) readline('> ');
    $selectCar = $carList[$input];
}

$pin = (int) readline ('Enter PASSWORD for ' . $selectCar->getCarModel() . ': ');
$attempts = 3;

while ($pin !== $selectCar->getPin() && $attempts >= 0) {
    echo "Incorrect password for car! Try Again, $attempts - Attempts left!\n";
    $attempts--;
    $pin = readline('Enter PASSWORD: ');

    if ($attempts <= 0) {
        echo 'Sorry, you blocked car! Try again!' . PHP_EOL;
        break;
    }
}

if ($pin == $selectCar->getPin()) {
    while ($selectCar->getFuelAmount() > 0)
    {
        $selectCar->increaseOdometer(100);
        $selectCar->burntFuel();

        echo 'Car Model: [' . $selectCar->getCarModel() . '] Mileage driven: [' . $selectCar->getOdometer() . '] - Fuel left: [' . $selectCar->getFuelAmount() .  'L]' . PHP_EOL;
        sleep((int) 1);
    }
}

?>
