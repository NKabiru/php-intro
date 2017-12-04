 <?php

interface FullName {
    public function getFullName();
}
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

    function getFullName(){
        return "$this->fname"." $this->lname";
    }

}

class EmployeeIncome extends  Employee {
    function calcNetIncome(){
        return $this->income * 0.85;
    }
}

//Creating employee objects
$john = new EmployeeIncome("John", "Doe", "Developer", 60000);
$ann = new EmployeeIncome("Ann", "Other", "Manager", 100000);
$sam = new EmployeeIncome("Sam", "Bodie", "Operator", 50000);

$list = array($john, $ann, $sam);

require 'index.view.php';