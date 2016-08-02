<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:56 AM
 */

namespace WB_Objects;


class Post_Type
{
    function __construct() {
        $argv = func_get_args();
        switch( func_num_args() ) {
            case 1:
                self::__construct1($argv[0]);
                break;
            case 2:
                self::__construct2( $argv[0], $argv[1] );
                break;
            case 3:
                self::__construct2( $argv[0], $argv[1], $argv[2] );
        }
    }

    function __construct1($arg1) {
        ...
    }

    function __construct2($arg1, $arg2) {
        ...
    }

    function __construct3($arg1, $arg2, $arg3) {
        ...
    }
}

$a = new Example("Argument 1");
$b = new Example("Argument 1", "Argument 2");
$b = new Example("Argument 1", "Argument 2", "Argument 3");