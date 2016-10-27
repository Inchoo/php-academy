<?php

//namespace needs to go first in file

namespace Ferit;

class Student
{

}

$student1 = new Student();
var_dump($student1);

$student2 = new \Ferit\Student();
var_dump($student2);


/////////////////////////////////////

namespace Inchoo;

class Developer
{

}

$developer1 = new Developer();
var_dump($developer1);




/**
 * @note:
 *  - how do we call \Ferit\Student here under Inchoo namespace?
 *  - show "use"
 *  - every class should be in separate file !!
 */
