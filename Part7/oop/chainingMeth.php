<?php  
class test{
  public function first()
  {
    echo "First Method.<br>";
    return $this;
  }
  public function second()
  {
    echo "Second Method.<br>";
    return $this;
  }
  public function third()
  {
    echo "Third Method.<br>";
  }
 
}

$test = new test();
$test->first()->second()->third();
?>