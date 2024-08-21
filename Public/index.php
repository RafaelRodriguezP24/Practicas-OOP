<?php

final class Person {
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changeNickName = 0;
    protected $birthDate;

    public function __construct
    (
        string $firstName,
        string $lastName,
        string $nickName,
        string $birthDate
    )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nickName = $nickName;
        $this->birthDate = $birthDate;
    }

    public function firstName()
    {
        return $this->firstName;
    }

    public function lastName()
    {
        return $this->lastName;
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    public function setNickName($nickName)
    {
        if (strlen($nickName) < 2) {
            throw new Exception("Nickname must be at least 2 characters long");
        }
        if ($nickName === $this->firstName || $nickName === $this->lastName) {
            throw new Exception("Nickname cannot be the same as first name or last name");
        }
        if ($this->changeNickName >= 2) {
            throw new Exception("You can't change a nickname more than 2 times");
        }

        $this->nickName = $nickName;
        $this->changeNickName++;
    }

    public function birthDate()
    {
        return $this->birthDate;
    }

    public function getAge()
    {
        $birthDate = new DateTime($this->birthDate);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate)->y;
        return $age;
    }

    public function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$person = new Person("John", "Doe", "JD", "1990-03-24");

echo "{$person->fullName()} is {$person->getNickName()} y se quiere cambiar el alias ha {$person->setNickName('JDD')} {$person->getNickName()} 
su cumpleaños es {$person->birthDate()} y tiene {$person->getAge()} years old.\n";





