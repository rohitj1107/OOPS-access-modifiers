<?php
// base class
class base{
    // protected property
    protected $name;
    // public method
    public function __construct($n){
        $this->name = $n;
    }
    // public method
    public function info(){
        echo $this->name;
    }
}
// drive class extends base class
class drive extends base {
    // public method
    public function get(){
        echo $this->name;
    }
}
// create object
$obj = new drive('Ram');
// call object
echo $obj->get();
?>
