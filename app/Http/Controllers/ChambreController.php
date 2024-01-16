<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chambre;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $chambres = Chambre::where('articles_id', $id)->get();

        return view('Admin.Chambre.listechambre', compact('chambres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {


        return view('Admin.Chambre.createForm', [

            'articleId' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $image = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                if ($file !== null && !$file->getError()) {
                    $image[] = $file->store('chambre', 'public');
                }
            }
            if (Chambre::insert([
                'titre' => $request->titre,
                'articles_id' => $request->articles_id,
                'toilette' => $request->toilette,
                'dimension' => $request->dimension,
                'image' => implode('|', $image),
            ])) {
                return redirect()->route('admin.index')->with('success', 'la chambre a bien été ajouté');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chambre = Chambre::findOrFail($id);

        return view('Admin.Chambre.editForm', [

            'chambre' => $chambre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = array();
        $chambre = Chambre::findOrFail($id);
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                // if ($chambre->image) {
                //     Storage::disk('public')->delete($file->image);
                // }
                if ($file !== null && !$file->getError()) {
                    $image[] = $file->store('chambre', 'public');
                }
            }
            if ($chambre->update([
                'titre' => $request->titre,
                'articles_id' => $request->articles_id,
                'toilette' => $request->toilette,
                'dimension' => $request->dimension,
                'image' => implode('|', $image),
            ])) {
                $id = $chambre->articles_id;
                return redirect()->route('admin.chambreindex', compact('id'))->with('success', 'la chambre a bien été modifié');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Chambre::destroy($id);
        return back()->with('success', 'la chambre a bien été supprimer');
    }
}
