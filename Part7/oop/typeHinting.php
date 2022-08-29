<?php
// function sum(int $v) // with restriction it will not enter the func & throw error on this line.
// {
//     echo $v + 20;
// }
// sum("s");

class hello
{
    public function hi()
    {
        echo "Hello";
    }
}
class bye
{
    public function bye()
    {
        echo "bye";
    }
}
function wow(hello $c)
{
    $c->hi();
}
$test = new hello();
wow($test);