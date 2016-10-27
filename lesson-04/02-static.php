<?php
header('Content-Type: text/plain');


/**
 * Static property and static method
 */
class Student
{
    //const I_AM_CONSTANT = ':]';

    public static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    public static function test()
    {
        echo 'test';
    }

}


var_dump(Student::$counter);

$student1 = new Student();
$student2 = new Student();

var_dump(Student::$counter);

//Student::test();
//var_dump(Student::I_AM_CONSTANT);


/**
 * @note:
 * - make counter private and write public function getCounter() that returns it's value
 * - mention or show singleton?
 * - The Scope Resolution Operator (also called Paamayim Nekudotayim)
 */

