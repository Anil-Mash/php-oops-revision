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
    public function __wakeup()
    {
       echo "this is a wake up method ";
    }
}

$obj = new student();
$obj->fullname("Anil", "Saini");
$srl = serialize($obj);
//echo $srl;
$unsrl = unserialize($srl);
print_r($unsrl);
?>