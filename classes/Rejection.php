<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:37 AM
 */

namespace WB_Objects;


class Rejection
{
    public static function factory1($arg1) {
    }

    public static function factory2($arg1, $arg2) {
    }
}

$a = new Example::factory1("Argument 1");
$b = new Example::factory2("Argument 1", "Argument 2");