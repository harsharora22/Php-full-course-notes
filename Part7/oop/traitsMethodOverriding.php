<?php
trait hello
{
    public function hii()
    {
        echo "Hello from trait\n";
    }
}
trait ee
{
    public function hii()
    {
        echo "Hello from ee trait\n";
    }
}
class base
{
    use hello, ee {
        ee::hii insteadof hello;
        hello::hii as hey;
    }
    // public function hii()
    // {
    //     echo "hii from hii\n";
    // }
}
// class child extends base
// {
//     // use hello;
//     // public function hii()
//     // {
//     //     echo "hii from bye\n";
//     // }
// }
$test = new base();
$test->hii();
$test->hey();