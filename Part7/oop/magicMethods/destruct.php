<?php  
class test{
  public function __construct()
  {
    echo "construct Method.<br>";
  }
  public function hii()
  {
    echo "Hello<br>";
  }
  public function __destruct()
  {
    echo "  destruct Method.<br>";
  }
 
}
$test=new test();
$test->hii();