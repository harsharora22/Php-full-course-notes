<?php
trait hello
{
    public function sayHii()
    {
        echo "Hello";
    }
    public function sayHello()
    {
        echo "Hello everyone!";
    }
}
trait bye
{
    public function bye()
    {
        echo "Byee";
    }
}
class base
{
    use hello, bye;
}
class base1
{
    use hello;
}
$test = new base();
$test1 = new base1();
$test->bye();
$test->sayHello();
$test1->sayHii();