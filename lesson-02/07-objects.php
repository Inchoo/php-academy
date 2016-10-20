<?php

/**
 * Class Student
 */
class Student
{
    public $university = 'J.J. Strossmayer, Osijek';

    public $name;

    /**
     * Student constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return void
     */
    public function echoName()
    {
        echo $this->name;
    }

}

echo '<pre>';

$student1 = new Student('Pero');
var_dump($student1);


//$student1->echoName();



/**
 * Class FeritStudent
 */
class FeritStudent extends Student
{
    public $faculty = 'FERIT';
    
    public function getFaculty()
    {
        
    }

}

$student2 = new FeritStudent('Ivan');
var_dump($student2);
