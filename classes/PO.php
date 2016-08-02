<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 1:35 AM
 */
include ('iPO.php');
include_once('iPart.php');include_once('Part.php');


class PO implements iPO
{
    private $part;
    private $txn;
    private $po_num;

    /**
     * @return mixed
     */
    public function getTxn()
    {
        return $this->txn;
    }

    /**
     * @param mixed $txn
     */
    public function setTxn($txn)
    {
        $this->txn = $txn;
    }

    /**
     * PO constructor.
     * @param $po_num
     */
    public function __construct(iPart $part)
    {
        $this->part =  $part;
        $this->txn =$this->part->getPartNo();
        //print($this->txn);
        //$this->part
    }

    /**
     * @param mixed $po_num
     */
    public function setPoNum($po_num)
    {
        $this->po_num = $po_num;
    }

    /**
     * @return mixed
     */
    public function getPoNum()
    {
        return $this->po_num;
    }


}