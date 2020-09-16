<?php declare(strict_types=1);

Class Person
{
    protected string $name;
    protected string $middlename;
    protected string $surname;

    public function __construct(string $name, string $middlename, string $surname)
    {
        $this->name = $name;
        $this->middlename = $middlename;
        $this->surname = $surname;
    }

    public function export()
    {
        $this->name();
        $this->middlename();
        $this->surname();
    }
}

$person = new Person('Pēteris', 'Māris', 'Andersons');
var_dump($person);
?>