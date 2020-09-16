<?php declare(strict_types=1);

Class Person
{
    protected string $name;
    protected ?string $middlename;
    protected string $surname;

    public function __construct(string $name, string $surname, string $middlename = null)
    {
        $this->name = $name;
        $this->middlename = $middlename;
        $this->surname = $surname;
    }

    public function getName(): string
    {
        return $this->name();
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename();
    }

    public function getSurname(): ?string
    {
        return $this->surname();
    }
}

$peteris = new Person('Pēteris', 'Māris', 'Andersons');
$andris = new Person('Andris', 'Aleksejs');

var_dump($peteris, $andris);
?>