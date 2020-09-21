<?php declare(strict_types=1);

class Strape
{
    public string $circleArea;
    public string $rectangleArea;
    public string $triangleArea;


    public function __construct(
        string $circleArea,
        string $rectangleArea,
        string $triangleArea
    )
    {
        $this->circleArea = $circleArea;
        $this->rectangleArea = $rectangleArea;
        $this->triangleArea = $triangleArea;
    }

    public function getCircleArea()
    {
        return $this->circleArea;
    }

    public function getRectangleArea()
    {
        return $this->rectangleArea;
    }

    public function getTriangleArea()
    {
        return $this->triangleArea;
    }
}

class Strape extends Circle
{
    public function circleArea($radius): int
    {
        return pi() * pow($radius, 2);
    }
}

class Strape extends Rectangle
{
    public function rectangleMath($length, $width): int
    {
        return $length * $width;
    }
}

class Strape extends Triangle
{
    public function triangleMath($base, $height): float
    {
        return $base * $height * 0.5;
    }
}



?>

