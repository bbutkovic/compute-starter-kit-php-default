<?php

echo "This is response body" . PHP_EOL;

$geo = \FastlyCE\Geo::lookup($_SERVER['REMOTE_ADDR']);

echo "You are visiting us from " . $geo->city . PHP_EOL;
