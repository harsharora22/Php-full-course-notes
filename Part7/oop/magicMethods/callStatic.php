<?php
class student
{
    private static function hello()
    {
        echo "Hello";
    }
    public static function __callStatic($method, $args)
    {
        if (method_exists(__CLASS__, $method)) {
            call_user_func_array([__CLASS__, $method], $args);
        }
        echo "Method doesn't exists: $method";
    }
}
student::hello();
