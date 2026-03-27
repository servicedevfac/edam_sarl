<?php
require 'vendor/autoload.php';
$r = new ReflectionMethod('Illuminate\Database\Query\Builder', 'where');
echo "File: " . $r->getFileName() . "\n";
echo "Start Line: " . $r->getStartLine() . "\n";
echo "End Line: " . $r->getEndLine() . "\n";
