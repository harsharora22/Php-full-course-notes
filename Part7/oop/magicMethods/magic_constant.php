<?php
// echo "Line Number : " . __LINE__;
// echo "The full path of the file is : " . __FILE__;
// echo "The full path of the directory is : " . __dir__;

// function hello()
// {
//     echo "The function name is : " . __FUNCTION__;
// }
// hello();

// class MyClass
// {
//     public function getClassName()
//     {
//         //   return __CLASS__;
//         return __METHOD__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getClassName();

// namespace Mynamespace;

// class MyClass
// {
//     public function getNamespace()
//     {
//         //   return __CLASS__;
//         return __NAMESPACE__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getNamespace();

trait MyTrait
{
    public function getTraitName()
    {
        return __TRAIT__;
    }
}
class MyClass
{
    use MyTrait;
}
$obj = new MyClass();
echo $obj->getTraitName();