<?php

// class myclass
// {
//     public function name()
//     {
//         echo "Class name : " . get_class($this) . "\n";
//     }
// }
// $obj = new myclass();
// $obj->name();
// echo "Class name : " . get_class($obj);

// class myclass
// {

// }
// class xyz extends myclass
// {
//     public function name()
//     {
//         echo "Parent Class name : " . get_parent_class($this) . "\n";
//     }
// }
// $obj = new xyz();
// $obj->name();
// echo "Parent Class name : " . get_parent_class("xyz");

// class myclass
// {
//     public function __construct()
//     {
//         print_r(get_class_methods($this));
//     }
//     public function name()
//     {
//     }public function occupation()
//     {
//     }
// }
// $obj = new myclass();
// $classMethods = get_class_methods("myclass");
// echo "<pre>";
// print_r($classMethods);
// echo "</pre>";

// class myclass
// {
//     public $var1;
//     public $var2 = "HARSH";
//     public $var3 = 100;
//     private $var4;
//     public function __construct()
//     {
//         $this->var1 = "Hello";
//         $this->var4 = "EEE";
//         //   echo "<pre>";
//         //   print_r(get_class_vars(__CLASS__));
//         //   echo "</pre>";
//         echo "<pre>";
//         print_r(get_object_vars($this));
//         echo "</pre>";
//     }
// }
// $obj = new myclass();
// // $class_vars = get_class_vars(get_class($obj));
// $class_vars = get_object_vars($obj);
// echo "<pre>";
// print_r($class_vars);
// echo "</pre>";

// class myclass
// {
//     public static function test()
//     {
//         var_dump(get_called_class());
//     }
// }
// class xyz extends myclass
// {

// }
// myclass::test();
// xyz::test();

// interface test
// {

// }
// trait test2
// {

// }
// class myclass
// {
//     use test2;

// }
// class xyz extends myclass
// {

// }
// echo "<pre>";
// // print_r(get_declared_classes());
// print_r(get_declared_traits());
// echo "</pre>";

class test
{
    public $name;
}
class_alias("test", "tst");
$a = new test();
$b = new tst();
echo $b->test = "Harsh";