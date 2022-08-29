<?php
class calculation
{
    public $a, $b, $c;
    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;
$c2 = new calculation();
$c2->a = 30;
$c2->b = 10;
echo "Value of c1: " . $c1->sum();
echo "<br>";
echo "Value of c2: " . $c2->sub();