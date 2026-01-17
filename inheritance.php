<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;    
        $this->age = $age;
        $this->salary = $salary;
    }
    function display(){
        echo "Employee Details: ";
        echo  "Name: ".$this->name. " Age: ".$this->age. " Salary: ".$this->salary. "<br>";
    }
}

class manager extends employee{
    public $ta = 1000;
    public $da = 500;
    public $total_salary;
    function display(){
        $this->total_salary = $this->salary + $this->ta + $this->da;
        echo "Manager Details: ";
        echo  "Name: ".$this->name. " Age: ".$this->age. " Total Salary: ".$this->total_salary. "<br>";
    }
}

$obj = new employee("John", 30, 50000);
$obj->display();

$obj2 = new manager("Doe", 40, 70000);
$obj2->display();

?>