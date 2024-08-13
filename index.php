<?php

final class Person {
    public $firstname;
    public $lastname;

    public function __construct
    (
        $firstname,
        $lastname
    )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function fullName()
    {
        return $this->firstname . " " . $this->lastname;
    }
}

$person1 = new Person('John', 'Doe');
$person2 = new Person('Jane', 'Doe');


echo "{$person1->fullName()} es amigo de {$person2->fullName()}";


