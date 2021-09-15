<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info() {
        echo "<h3>Employee Profile</h3>";
        echo "Name : ". $this->name ."<br>";
        echo "Age : ". $this->age ."<br>";
        echo "Salary : ". $this->salary ."<br>";
    }


}


class manager extends employee{
    public $ta = 1100;
    public $phone = 500;
    public $TotalSalary;

    function info() {
        $this->TotalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Name : ". $this->name ."<br>";
        echo "Age : ". $this->age ."<br>";
        echo "Salary : ". $this->TotalSalary ."<br>";
    }

}


$e1 = new employee("Ahsan", 22, 2450000);
$m1 = new manager("Abu Motaleb", 21, 2500000);
$m2 = new manager("Arfa", 21, 150000);

$e1->info();
$m1->info();
$m2->info();



?>