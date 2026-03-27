<?php
require 'vendor/autoload.php';

try {
    $r = new ReflectionMethod('Illuminate\Database\Query\Builder', 'where');
    echo "Query Builder where parameters:\n";
    foreach ($r->getParameters() as $p) {
        echo $p->getName() . ': ' . (string) $p->getType() . "\n";
    }

    $methods = ['where', 'whereNested', 'nestedWhere', 'whereGroup'];
    echo "\nChecking methods in Eloquent Builder:\n";
    foreach ($methods as $m) {
        if ($r2->getDeclaringClass()->hasMethod($m)) {
            $met = $r2->getDeclaringClass()->getMethod($m);
            echo "Method $m exists. Parameters:\n";
            foreach ($met->getParameters() as $p) {
                echo "  " . $p->getName() . ': ' . (string) $p->getType() . "\n";
            }
        } else {
            echo "Method $m DOES NOT exist.\n";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
