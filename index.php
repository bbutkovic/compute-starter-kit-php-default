<?php

header("X-Clacks-Overhead: GNU Terry Pratchett");

echo "This is response body" . PHP_EOL;

$geo = \FastlyCE\Geo::lookup('127.0.0.1');

echo "You are visiting us from " . $geo->city . PHP_EOL;