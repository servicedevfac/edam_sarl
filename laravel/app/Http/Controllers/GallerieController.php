<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GallerieController extends Controller
{
    public function galerie()
    {
        $galleries = Gallerie::latest()->paginate(6);
        return view('public.galerie', compact('galleries'));
    }

    public function index()
    {
        $galleries = Gallerie::latest()->paginate(10);
        return view('admin.gallerie', compact('galleries'));
    }

    public function create()
    {
        return view('admin.creategallerie');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $imagePath = $request->file('image')->store('galleries', 'public');

        Gallerie::create([
            'titre' => $request->titre,
            'image' => $imagePath
        ]);

        return redirect()->route('galleries.index')
            ->with('success', 'Galerie ajoutée avec succès');
    }

    public function edit(Gallerie $gallerie)
    {
        return view('admin.creategallerie', compact('gallerie'));
    }

    public function update(Request $request, Gallerie $gallerie)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {

            // Supprimer ancienne image
            if ($gallerie->image && Storage::disk('public')->exists($gallerie->image)) {
                Storage::disk('public')->delete($gallerie->image);
            }

            $imagePath = $request->file('image')->store('galleries', 'public');
            $gallerie->image = $imagePath;
        }

        $gallerie->titre = $request->titre;
        $gallerie->save();

        return redirect()->route('galleries.index')
            ->with('success', 'Galerie modifiée avec succès');
    }

    public function destroy(Gallerie $gallerie)
    {
        if ($gallerie->image && Storage::disk('public')->exists($gallerie->image)) {
            Storage::disk('public')->delete($gallerie->image);
        }

        $gallerie->delete();

        return redirect()->route('galleries.index')
            ->with('success', 'Galerie supprimée avec succès');
    }
}