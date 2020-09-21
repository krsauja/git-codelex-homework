<?php declare(strict_types=1);

abstract class Shape
{
    public abstract function getArea(): float;
    public function getName(): string
    {
        return get_class($this);
    }
}
class Circle extends Shape
{
    private $dm;
    public function __construct(int $dm)
    {
        $this->dm = $dm;
    }
    public function getArea(): float
    {
        return 10 * $this->dm;
    }
}
class Cube extends Shape
{
    public function getArea(): float
    {
        return 10 * 10 * 10;
    }
}
// Abstract class
// Collection wrap object
class ShapeCollection
{
    private $shapes = [];
    public function add(Shape $shape): void
    {
        $this->shapes[] = $shape;
    }
    public function all(): array
    {
        return $this->shapes;
    }
}
$shapes = new ShapeCollection();
$shapes->add(new Circle(10));
$shapes->add(new Cube());
$shapes->add(new Cube());
foreach ($shapes->all() as $shape)
{
    /** @var Shape $shape */
    echo $shape->getName() . ' ' . $shape->getArea() . PHP_EOL;
}