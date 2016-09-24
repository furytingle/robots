<?php

ini_set("display_errors", 1);

require_once "autoload.php";

$factory = new \Factory\RobotFactory();

$factory->addType(new \Robots\MyHydra1());

$hydra = $factory->createMyHydra1();
