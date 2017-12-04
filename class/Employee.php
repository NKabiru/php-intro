<?php
namespace Employee;

// Trait
trait CombinedName {
    function getFullName(){
        return "$this->fname"." $this->lname";
    }
}

// Interface
interface FullName {
    public function getFullName();
}

// Employee class
class Employee implements FullName {
    var $fname;
    var $lname;
    var $job;
    var $income;

    function __construct($fname, $lname, $job, $income)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->job = $job;
        $this->income = $income;
    }

    use CombinedName;

}

// Creating child class that inherits properties of Employee class
class EmployeeIncome extends  Employee {
    function calcNetIncome(){
        return $this->income * 0.85;
    }
    use CombinedName;
}