<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:34 AM
 */
include('iPart.php');


class Part implements iPart
{
    private $part_no;

    /**
     * Part constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getPartNo()
    {
        return $this->part_no;
    }

    /**
     * @param mixed $part_no
     */
    public function setPartNo($part_no)
    {
        $this->part_no = $part_no;
    }



}