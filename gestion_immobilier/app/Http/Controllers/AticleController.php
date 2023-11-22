<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class AticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin.Article.listeArticle', ['articles' => Articles::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Articles();
        $user = Utilisateurs::where('admin', '=', 1)->get();
        $userId = $user[0]->id;
        return view('Admin.Article.formArticle', [
            'userId' => $userId,
            'article' => $article
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $article = new Articles();
        $articleverifier = $request->validate([
            'nom' => ['required', 'min:2'],
            'categorie' => 'required',
            'adresse' => 'required',
            'utilisateur_id' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image = $request->file('image');



        if ($image !== null && !$image->getError()) {
            $article['image'] = $image->store('image', 'public');
        }

        /* if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $article['image'] = $filename;
        }
*/

        $article = Articles::create($articleverifier);


        return redirect()->route('admin.index')->with('success', 'Le bien a été crée');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        return view('Articles.DetailArticle');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Articles::findOrFail($id);
        $user = Utilisateurs::where('admin', '=', 1)->get();
        $userId = $user[0]->id;
        return view('Admin.Article.updateForm', [
            'userId' => $userId,
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $articleverifier = $request->validate([
            'nom' => ['required', 'min:2'],
            'categorie' => 'required',
            'adresse' => 'required',
            'utilisateur_id' => 'required',
            'description' => 'required',
            'image' => ['required', 'max:2000'],
            'status' => 'required',
        ]);
        $image = $request->file('image');



        if ($image !== null && !$image->getError()) {
            $article['image'] = $image->store('image', 'public');
        }
        /*if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $article['image'] = $filename;
        }*/

        $article = Articles::findOrFail($id);

        if ($article->update($articleverifier)) {
            return redirect()->route('admin.index')->with('success', 'Le bien a été modifier');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Articles::destroy($id);
        return redirect()->route('admin.index')->with('success', 'Le bien a été supprimer');
    }
}
