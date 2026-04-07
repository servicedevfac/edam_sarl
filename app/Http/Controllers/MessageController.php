<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = message::query();

        // Handle Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nom', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('sujet', 'like', "%{$search}%");
            });
        }

        $messages = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
        return view('admin.admin-messages', compact('messages'));
    }

    /**
     * Mark all unread messages as read
     */
    public function markAllRead()
    {
        message::where('status', 'Non lu')->update(['status' => 'Lu']);
        return redirect()->back()->with('success', 'Tous les messages ont été marqués comme lus.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255|min:2',
            'telephone' => 'required|string|max:255|min:2',
            'sujet' => 'required|string|max:255|min:2',
            'message' => 'required|string|max:255|min:2',
        ]);
        $message = new message();
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->telephone = $request->telephone;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('success', 'Message enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        return view('admin.messageShow', ['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, message $message)
    {
        $message->status = $request->status;
        $message->save();
        return redirect()->back()->with('success', 'Statut mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message supprimé avec succès');
    }
}
