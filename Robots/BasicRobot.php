<?php

namespace Robots;

use Interfaces\RobotInterface;

class BasicRobot implements RobotInterface
{

    protected $speed;

    protected $weight;

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function addRobot(RobotInterface $robot) {
        $this->speed += $robot->getSpeed();
        $this->weight += $robot->getWeight();
    }


}