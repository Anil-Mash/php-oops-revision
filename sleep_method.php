<?php 
class student {
    public $course ="MCA";
    private $firstname, $lastname;

    public function fullname($firstname, $lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function __sleep()
    {
        return array("firstname","lastname");
    }
}

$obj = new student();
$obj->fullname("Anil", "Saini");
$srl = serialize($obj);
echo $srl;
?>