<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Articles;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EstleproprietaireTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testArticleCreation()
    {
        Storage::fake('public');

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('admin/Article/store', [
            'nom' => 'Article Test',
            'categorie' => 'luxe',
            'adresse' => 'Adresse Test',
            'user_id' => $user->id,
            'description' => 'Description Test',
            'dimension' => 100,
            'image' => UploadedFile::fake()->image('article.jpg'),
            'status' => 'on',
            'espace_verte' => 'on'
        ]);

        $response->assertRedirect(route('admin.index'));
        $response->assertSessionHas('success', 'Le bien a été crée');

      
    }
    public function testProprietairePeutSupprimerArticle()
    {
        // Créer un utilisateur et un article associé
        $user = User::factory()->create();
        $article = Articles::factory()->create(['user_id' => $user->id]);

        // Authentifier l'utilisateur
        $this->actingAs($user);

        // Envoyer une requête de suppression pour l'article
       // $response = $this->post(route('admin.destroy', $article->id));
       $response = $this->delete(route('admin.destroy', $article->id));

        // Vérifier que l'article a été supprimé avec succès
        $response->assertStatus(302);
        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
        $response->assertSessionHas('success', 'Le bien a été supprimé');
    }

    public function testNonProprietaireNePeutPasSupprimerArticle()
    {
        // Créer deux utilisateurs distincts et un article associé à l'un d'eux
        $proprietaire = User::factory()->create();
        $nonProprietaire = User::factory()->create();
        $article = Articles::factory()->create(['user_id' => $proprietaire->id]);

        // Authentifier l'utilisateur non propriétaire
       

        // Envoyer une requête de suppression pour l'article
        $response = $this->actingAs($nonProprietaire)->delete(route('admin.destroy', $article->id));
     
        // Vérifier que l'article a été supprimé avec succès
        $response->assertStatus(403);
       
    }
    public function testListeDesBiens()
    {
   

        $response = $this->get(route('article.index'));

        $response->assertStatus(200);
        
    }
}
