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
        return $track1 = array_filter(explode('X', str_repeat('-X', $tracklength)));
        return $track2 = array_filter(explode('0', str_repeat('-0', $tracklength)));
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