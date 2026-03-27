<?php
require 'vendor/autoload.php';
$r = new ReflectionClass('Illuminate\Database\Query\Builder');
foreach ($r->getMethods(ReflectionMethod::IS_PUBLIC) as $m) {
    if (str_contains($m->getName(), 'where')) {
        echo $m->getName() . "(";
        $params = [];
        foreach ($m->getParameters() as $p) {
            $params[] = (string)$p->getType() . " $" . $p->getName();
        }
        echo implode(', ', $params) . ")\n";
    }
}
