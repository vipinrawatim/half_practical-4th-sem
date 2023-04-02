<?php
class student
{
    public $name;
    public $rollno;
    public $branch;
    public $year;
    function set($n, $r, $b, $y)
    {
        $this->name = $n;
        $this->rollno = $r;
        $this->branch = $b;
        $this->year = $y;
    }
    function get()
    {
        echo nl2br("Name : $this->name \n");
        echo nl2br("Rollno : $this->rollno \n");
        echo nl2br("Branch : $this->branch \n");
        echo nl2br("Year : $this->year \n\n\n");
    }
}
$student1 = new student();
$student2 = new student();
$student3 = new student();
$student1->set("Vipin", "83", "cse", "2nd");
$student2->set("Rohit", "24", "cse", "2nd");
$student3->set("Siddhart", "56", "cse", "2nd");
$student1->get();
$student2->get();
$student3->get();
?>
