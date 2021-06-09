#!/usr/bin/php
<?php

require_once 'vendor/autoload.php';

try {
  $path = trim($argv[1]);
  if (!file_exists($path)) {
    throw new InvalidArgumentException("File doesn't opened!");
  }
  $file = fopen($path, 'r');
  if (!$file) {
    throw new InvalidArgumentException("Error while opening file");
  }
  while ($line = trim(fgets($file))) {
    echo 'String "' .  $line . '" is ';
    echo (OTUS_backend_lesson_2::analyzeStr($line) ? 'correct' : 'incorrect') . PHP_EOL;
  }
  fclose($file);
} catch (InvalidArgumentException $e){
 echo $e->getMessage();
}
