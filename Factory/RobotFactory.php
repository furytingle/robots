<?php

namespace Factory;

use Interfaces\RobotInterface;

class RobotFactory
{

    protected $typeList;

    public function __construct() {
        $this->typeList = [];
    }

    public function addType(RobotInterface $robot) {
        $this->typeList[] = get_class($robot);
    }

    public function _call($name, $args) {
        
    }
}
