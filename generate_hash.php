<?php

$time = time();
echo "time: $time".PHP_EOL."Hash: ".sha1($argv[1].$time.'Es un secreto').