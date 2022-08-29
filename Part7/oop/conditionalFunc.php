<?php
// interface myInterface
// {

// }
class myClass
{
    public $name;
    public function method()
    {
        # code...
    }
}
// trait myTrait
// {
//     public function method()
//     {
//         # code...
//     }
// }

class childClass extends myClass
{

}

// if (class_exists("myClass")) {
//     echo "Class exists";
// }
// if (interface_exists("myInterface")) {
//     echo "exists";
// }
// $obj = new myClass();
// if (method_exists($obj, "method")) {
//     echo "exists";
// }
// if (trait_exists("myTrait")) {
//     echo "exists";
// }
// if (property_exists("myClass", "name")) {
//     echo "exists";
// }
// $obj = new myClass();
// if (is_a($obj, "myClass")) {
//     echo "exists";
// }
$obj = new childClass();
if (is_subclass_of($obj, "myClass")) {
    echo "exists";
} else {
    echo "not exists";
}