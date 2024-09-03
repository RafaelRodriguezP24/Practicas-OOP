<?php

class Name
{
    protected string $name;

    protected static $table = "names";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}

$rafael = new Name("Rafael");
$saavedra = new Name("Saavedra");

echo "<p>{$rafael->name()}</p>";
echo "<p>{$saavedra->name()}</p>";