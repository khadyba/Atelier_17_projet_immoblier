<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $comment = $request->validate([
            'contenue' => 'required',
            'articles_id' => 'required',
            'user_id' => 'required',
        ]);


        $commentaire = Commentaire::create($comment);

        if ($commentaire->save()) {

            return redirect()->route('article.show',  $commentaire->articles_id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('AllUsers.Articles.updateDetailArticle', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = Commentaire::findOrFail($id);
        $commentaire = $request->validate([
            'contenue' => 'required',
            'articles_id' => 'required',
            'user_id' => 'required',
        ]);

        if ($comment->update($commentaire)) {
            return Redirect()->route('article.show', $comment->articles_id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Commentaire::destroy($id)) {
            return redirect()->back();
        }
    }
}
