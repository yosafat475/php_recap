<?php

class person{

    public $name;

    protected $age;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        if($age<18)
        {
            exit("your not alowd");
        }

        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$john =new person($argv[1]);
$john ->setAge($argv[2]);

echo "Your name ".$john. "your age".$john->getAge();