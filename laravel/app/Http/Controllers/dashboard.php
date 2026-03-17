<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use App\Models\Devis;

class dashboard extends Controller
{
    public function index()
    {
        // Calculate new quotes (En attente)
        $newDevisCount = Devis::where('statut', 'En attente')->count();

        // Calculate unread messages (Non lu)
        $unreadMessagesCount = message::where('status', 'Non lu')->count();
        $totalMessagesCount = message::count();

        // Calculate response rate based on messages
        $responseRate = 0;
        if ($totalMessagesCount > 0) {
            $readMessages = message::where('status', 'Lu')->count();
            $responseRate = round(($readMessages / $totalMessagesCount) * 100);
        }

        // Fetch recent data for tables
        $recentDevis = Devis::orderBy('created_at', 'desc')->take(5)->get();
        $recentMessages = message::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'newDevisCount',
            'unreadMessagesCount',
            'responseRate',
            'recentDevis',
            'recentMessages'
        ));
    }
}
