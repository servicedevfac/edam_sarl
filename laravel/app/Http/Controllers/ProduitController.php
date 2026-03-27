<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display the public listing of the resource.
     */
    public function publicIndex()
    {
        $produits = Produit::latest()->get();
        return view('public.edam_gift', compact('produits'));
    }

    /**
     * Display a listing of the resource for admin.
     */
    public function index()
    {
        $produits = Produit::latest()->paginate(10);
        return view('admin.edam_gift.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.edam_gift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required',
            'prix' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imageName = 'images/' . $imageName;
        

        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->image = $imageName;
        $produit->prix = $request->prix;
        $produit->save();

        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès');
    }}

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('admin.edam_gift.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        return view('admin.edam_gift.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required',
            'prix' => 'required',
        ]);

        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->image = $request->image;
        $produit->prix = $request->prix;
        $produit->save();

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
