<?php declare(strict_types=1);

class Player
{
    private string $symbol;

    private function __construct(int $length, string $symbol)
    {
        $this->length = $length;
        $this->symbol = $symbol;
    }

    private function getSymbol(): string
    {
        return $this->symbol;
    }

    private function drawTrack(): string
    {

    }
}

$player1 = 'X';
$player2 = 'O';
$tracklength = 10;

$track1 =
$track2 =

$winner = false;

while ($winner === false)
{
    echo $player1->getSymbol();
    echo '';
    echo $track1->drawTrack();

    echo PHP_EOL;

    echo $player2->getSymbol();
    echo '';
    echo $track2->drawTrack();

    echo PHP_EOL;
    sleep((int)10);
}


?>