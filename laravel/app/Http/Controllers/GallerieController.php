<?php

namespace App\Http\Controllers;

use App\Models\gallerie;
use Illuminate\Http\Request;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function galerie()
    {
        $galleries = gallerie::paginate(6);
        return view('public.galerie', compact('galleries'));
    }

     public function index()
    {
        $galleries = gallerie::paginate(10);
        return view('admin.gallerie', compact('galleries'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.creategallerie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallerie = new gallerie();
        $gallerie->titre = $request->titre;
        $gallerie->image = $request->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $gallerie->image = $imageName;
        }
        $gallerie->save();

        return redirect()->route('galleries.index')->with('success', 'Gallerie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(gallerie $gallerie)
    {
        return view('admin.gallerie', compact('gallerie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallerie $gallerie)
    {
        return view('admin.creategallerie', compact('gallerie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallerie $gallerie)
    {
        $gallerie->titre = $request->titre;
        $gallerie->image = $request->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $gallerie->image = $imageName;
        }
        $gallerie->save();
        return redirect()->route('galleries.index')->with('success', 'Gallerie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallerie $gallerie)
    {
        // Delete the file from the disk
        if ($gallerie->image) {
            $imagePath = public_path('images/' . $gallerie->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        $gallerie->delete();
        return redirect()->route('galleries.index')->with('success', 'Gallerie supprimée avec succès');
    }
}
