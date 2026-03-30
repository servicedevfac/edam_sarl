<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource for the public.
     */
    public function publicIndex()
    {
        $galleries = Gallerie::latest()->paginate(9);
        return view('public.galerie', compact('galleries'));
    }

    /**
     * Display a listing of the resource for admin.
     */
    public function index()
    {
        $galleries = Gallerie::latest()->paginate(10);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/gallery'), $imageName);
        $imagePath = 'images/gallery/' . $imageName;

        Gallerie::create([
            'titre' => $request->titre,
            'image' => $imagePath,
        ]);

        return redirect()->route('galleries.index')
            ->with('success', 'Image ajoutée à la galerie avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallerie $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallerie $gallery)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $gallery->image;

        if ($request->hasFile('image')) {
            // Delete old image
            if (File::exists(public_path($gallery->image))) {
                File::delete(public_path($gallery->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/gallery'), $imageName);
            $imagePath = 'images/gallery/' . $imageName;
        }

        $gallery->update([
            'titre' => $request->titre,
            'image' => $imagePath,
        ]);

        return redirect()->route('galleries.index')
            ->with('success', 'Galerie mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallerie $gallery)
    {
        if (File::exists(public_path($gallery->image))) {
            File::delete(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()->route('galleries.index')
            ->with('success', 'Image supprimée de la galerie.');
    }
}
