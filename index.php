<?php

ini_set("display_errors", 1);

require_once "autoload.php";

$factory = new \Factory\RobotFactory();

$factory->addType(new \Robots\MyHydra1());
$hydra = $factory->createMyHydra1();

$factory->addType(new \Robots\MyHydra2());
$hydra2 = $factory->createMyHydra2(2);

$hydra->addRobot($hydra2);

var_dump($hydra);

$factory->addType(new \Robots\CustomRobot());

$customRobot = $factory->createCustomRobot();

$customRobot->addRobot($hydra2);

var_dump($customRobot);
