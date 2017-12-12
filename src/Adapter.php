<?php

namespace Ichte\Db;


use Zend\Db\Sql\Sql;

class Adapter extends \Zend\Db\Adapter\Adapter
{

    /**
     * @var Sql
     */
    public $sqldefault;

    public function __construct($driver)
    {
        parent::__construct($driver);
        $this->sqldefault = new Sql($this);
    }

    /**
     * @return Sql
     */
    public function getSql()
    {
        return new Sql($this);
    }
}