<?php
require 'vendor/autoload.php';

use App\Models\Devis;

try {
    echo "Testing Devis::query()->where(Closure)...\n";
    $query = Devis::query();
    $query->where(function ($q) {
        $q->where('nom', 'like', '%test%');
    });
    echo "Success!\n";
} catch (\Throwable $e) {
    echo "Caught Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
