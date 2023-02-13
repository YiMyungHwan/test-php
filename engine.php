<?php
require_once ("CarEngine.php");

$engine = new CarEngine();
$engine->setDisplacement(3.3);
$engine->engineName = "좋은 엔진";

echo $engine->getDisplacement();
echo $engine->engineName;