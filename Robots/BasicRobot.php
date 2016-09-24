<?php

namespace Robots;

use Interfaces\RobotInterface;

class BasicRobot implements RobotInterface
{

    protected $speed = 0;

    protected $weight = 0;

    public function getSpeed() {
        return $this->speed;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function addRobot($robots) {

        if (is_array($robots)) {
            foreach ($robots as $robot) {
                $this->sumStats($robot);
            }
        } else {
            $this->sumStats($robots);
        }
    }

    protected function sumStats(RobotInterface $robot) {
        $this->speed += $robot->getSpeed();
        $this->weight += $robot->getWeight();
    }
}