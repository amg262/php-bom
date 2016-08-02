<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:35 AM
 */



class Assembly
{
    private $id, $qty, $part;
    private $components = array();

    /**
     * Subassembly constructor.
     * @param $id
     * @param $qty
     * @param $part
     */
    public function __construct($id)
    {
        $this->id = $id;

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * @param mixed $part
     */
    public function setPart($part, $qty)
    {
        $this->part = $part;
        $this->qty = $qty;
        array_push( $this->components , array($this->getId(), array($this->part, $this->qty)));
    }

    /**
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents($components)
    {
        $this->components = $components;
    }

}