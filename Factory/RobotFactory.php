<?php

namespace Factory;

use Interfaces\RobotInterface;

class RobotFactory
{
    const CREATE_FUNC = 'create';

    const ROBOTS_NAMESPACE = "Robots\\";

    protected $typeList;

    public function __construct() {
        $this->typeList = [];
    }

    public function addType(RobotInterface $robot) {
        $this->typeList[] = get_class($robot);
    }

    public function _call($name, $args = null) {

        $typeName = str_replace(self::CREATE_FUNC, '', $name);

        if (null !== $args) {
            $result = [];

            for ($i = 1; $i < $args[0]; $i++) {
                $result[] = $this->createRobot($typeName);
            }

            return $result;
        } else {
            return $this->createRobot($typeName);
        }
    }

    private function createRobot($typeName) {
        if (in_array($typeName, $this->typeList)) {
            $className = self::ROBOTS_NAMESPACE . $typeName;
            return new $className();
        } else {
            throw new \Exception("Unknown robot type, add type before creating");
        }
    }
}
