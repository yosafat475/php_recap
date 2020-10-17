<?php
//=====================ini seters sama geters======================\\
class Task{
    protected $description;

    protected $complete=false;


    public function __construct($description)
    {
      return  $this->description=$description;
    }

    public function isComplete(){
        return $this->complete;
    }
    public function complete()
    {
       return $this->complete=true;
    }
    public function description(){
        return $this->description;
    }
}

$tasks=[
    new Task("go to store"),
    new Task("go to the market"),
    new Task("finish projeq")
];
$tasks[2]->complete();