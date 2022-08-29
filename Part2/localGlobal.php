<?php
$x = 15;
function test()
{
    $x = 10;
    // global $x;
    echo "Variable X inside function: $x <br>";
}
test();
echo "Variable X outside function: $x";