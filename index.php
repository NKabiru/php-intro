 <?php
 error_reporting(E_USER_ERROR);

 function handleError($errno, $errstr, $error_file, $error_line){
    echo "<b>User generated error $errno found in</b>$error_file line: $error_line <br/>";
    echo "<b>Description:</b> $errstr";
    echo "<br/>";
    echo "End of Script";
    die();
 }

 set_error_handler("handleError");

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

//Creating employee objects
$john = new EmployeeIncome("John", "Doe", "Developer", 60000);
$ann = new EmployeeIncome("Ann", "Other", "Manager", 100000);
$sam = new EmployeeIncome("Sam", "Bodie", "Operator", 50000);

$list = array($john, $ann, $sam);

// Importing the php file that contains the HTML
require 'index.view.php';