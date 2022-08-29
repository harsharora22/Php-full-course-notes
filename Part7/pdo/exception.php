<?php

class MyException extends Exception
{
    public function myError()
    {
        $error = "Error message is: " . $this->getMessage();

        return $error;
    }
}
function div($n)
{
    try {
        if ($n <= 0) {
            throw new Exception("<br>Not a valid number.");
        }
        if ($n == 1) {
            throw new MyException("<br>1 is your number.");

        }
        $d = 2 / $n;
        echo $d;
    } catch (Exception $error) {
        echo $error->getMessage();
        echo $error->getLine();
        //  echo $error->getCode();
        echo $error->getFile();
    } catch (MyException $error) {
        echo $error->myError();
    } finally {
        echo "<br> This will always call automatically";
    }
}
div(1);