<?php
require 'vendor/autoload.php';

$r = new ReflectionMethod('Illuminate\Database\Query\Builder', 'where');
$p = $r->getParameters()[0];
$type = $p->getType();

if ($type instanceof ReflectionUnionType) {
    echo "Union Type: " . $type . "\n";
    foreach ($type->getTypes() as $t) {
        echo "  - " . $t->getName() . "\n";
    }
} elseif ($type instanceof ReflectionNamedType) {
    echo "Named Type: " . $type->getName() . "\n";
} else {
    echo "No Type Hint\n";
}
