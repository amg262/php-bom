<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 11:21 AM
 */
class Database
{
    private $user = 'root';
    private $password = 'root';
    private $db = 'sandbox';
    private $host = '127.0.0.1';
    private $port = 8889;
    

    /**
     * Database constructor.
     * @param string $user
     * @param string $password
     * @param string $db
     * @param string $host
     * @param int $port
     */
    public function __construct($user, $password, $db, $host, $port)
    {
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
        $this->host = $host;
        $this->port = $port;
    }




}