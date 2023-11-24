<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('AllUsers.Articles.bizaimmoblier');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::where('status', 'off')->get();

        return view('AllUsers.Articles.PageAcceuil', ['articles' => $articles]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comments = Commentaire::where('articles_id', $id)->get();
        $articles = Articles::findOrFail($id);
        return view('AllUsers.Articles.DetailArticle', compact('articles', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
