<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Devis::query();

        // Handle Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nom', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('telephone', 'like', "%{$search}%")
                    ->orWhere('service', 'like', "%{$search}%");
            });
        }

        // Handle Status Filter
        if ($request->filled('statut') && $request->statut !== 'Tous') {
            $query->where('statut', $request->statut);
        }

        $devis = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('admin.admin-quotes', compact('devis'));
    }

    /**
     * Export Devis as CSV
     */
    public function export()
    {
        $devis = Devis::orderBy('created_at', 'desc')->get();

        $filename = "devis_" . date('Y-m-d_H-i-s') . ".csv";
        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['ID', 'Nom', 'Email', 'Telephone', 'Service', 'Message', 'Statut', 'Date'];

        $callback = function () use ($devis, $columns) {
            $file = fopen('php://output', 'w');

            // Output UTF-8 BOM for Excel compatibility
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($file, $columns, ';'); // Use semicolon for excel

            foreach ($devis as $devi) {
                $row = [
                    $devi->id,
                    $devi->nom,
                    $devi->email,
                    $devi->telephone,
                    $devi->service,
                    $devi->message,
                    $devi->statut,
                    $devi->created_at ? $devi->created_at->format('d/m/Y H:i') : ''
                ];
                fputcsv($file, $row, ';');
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'service' => 'required|string|max:255|min:2',
            'message' => 'required|string|max:255|min:2',
        ]);
        $devis = new Devis();
        $devis->nom = $request->nom;
        $devis->email = $request->email;
        $devis->telephone = $request->telephone;
        $devis->service = $request->service;
        $devis->message = $request->message;
        $devis->statut = 'En attente';
        $devis->save();
        return redirect()->back()->with('success', 'Devis enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Devis $devi)
    {
        return view('admin.quotesShow', ['devis' => $devi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devis $devi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devis $devi)
    {
        $devi->statut = $request->statut;
        $devi->save();
        return redirect()->back()->with('success', 'Statut mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devis $devi)
    {
        $devi->delete();
        return redirect()->route('devis.index')->with('success', 'Devis supprimé avec succès');
    }
}
