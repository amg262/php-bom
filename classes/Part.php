<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:34 AM
 */
//include( '' )

class Part
{
    private $id, $part_no, $name, $desc, $cost;
    private $attr = array();
    private $vendor;
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance = null;

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

class SingletonChild extends Part
{
}

$obj = Part::getInstance();
var_dump($obj === Part::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Part::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // boo
