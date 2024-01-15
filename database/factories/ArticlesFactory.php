<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            
            'categorie' => $this->faker->randomElement(['luxe', 'moyen']),
            'description' => $this->faker->paragraph,
            'dimension' => $this->faker->randomNumber(2), // Exemple, vous pouvez ajuster en fonction de votre logique
            'image' => $this->faker->image(), // Utilisez image() au lieu de imageUrl()
            'status' => $this->faker->randomElement(['on', 'off']),
            'espace_verte' => $this->faker->randomElement(['on', 'off']),
            'adresse' => $this->faker->address
            
        ];
    }
    public function Articles() : ArticlesFactory
    {
     return $this->state([
        'nom' => $this->faker->word,
            
        'categorie' => $this->faker->randomElement(['luxe', 'moyen']),
        'description' => $this->faker->paragraph,
        'dimension' => $this->faker->randomNumber(2), // Exemple, vous pouvez ajuster en fonction de votre logique
        'image' => $this->faker->image(), // Utilisez image() au lieu de imageUrl()
        'status' => $this->faker->randomElement(['on', 'off']),
        'espace_verte' => $this->faker->randomElement(['on', 'off']),
        'adresse' => $this->faker->address
        
     ]);
    }
}
