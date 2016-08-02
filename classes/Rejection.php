<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:37 AM
 */


class Rejection
{
    public static function factory1($arg1) {
        print('hi');

    }

    public static function factory2($arg1, $arg2) {
        return $arg2;
    }
}

//$a = new Rejection::factory1("Argument 1");
$b = new Rejection::factory2("Argument 1", "Argument 2");