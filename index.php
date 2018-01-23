<?php

require 'vendor/autoload.php';

$string = 'PadMePlz';

echo \StringUtils\Utils::leftPad($string, 10, '.') . PHP_EOL;
echo \StringUtils\Utils::rightPad($string, 10, '.') . PHP_EOL;
