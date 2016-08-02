<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 7:07 AM
 */
class _Pats
{

}

class _con
{
    public function __construct() {
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

    public function __construct1($arg1) {
        // ...
    }

    public function __construct2($arg1, $arg2) {
        //...
    }

    public function __construct3($arg1, $arg2, $arg3) {
        // ...
    }
}

$a = new Post_Type("Argument 1");
$b = new Post_Type("Argument 1", "Argument 2");
$b = new Post_Type("Argument 1", "Argument 2", "Argument 3");


class _single
{
    private static $instance;
    private $id, $part_no, $name, $desc, $cost;
    private $attr = array();
    private $vendor;
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}

class single_s extends _single
{
}

$obj = Part::getInstance();
var_dump($obj === Part::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Part::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // boo




class _factory
{
    public static function factory1($arg1) {
    }

    public static function factory2($arg1, $arg2) {
    }
}

$a = new Example::factory1("Argument 1");
$b = new Example::factory2("Argument 1", "Argument 2");