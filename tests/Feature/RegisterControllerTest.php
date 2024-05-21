<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase; // Utilisation du trait RefreshDatabase pour réinitialiser la base de données entre chaque test

    /**
     * Teste la fonction d'inscription d'un utilisateur.
     *
     * @return void
     */
    public function testRegister()
    {
        // Données d'utilisateur pour le test
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        // Envoi de la requête POST vers la route 'register' avec les données utilisateur
        $response = $this->post(route('register'), $userData);

        // Vérification de la redirection vers la page d'accueil après l'inscription réussie
        $response->assertRedirect(route('home'));

        // Vérification que l'utilisateur est bien enregistré dans la base de données
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);

        // Vérification que l'utilisateur est connecté après l'inscription
        $this->assertTrue(Auth::check());

        // Vérification que la session contient le message de succès après l'inscription
        $response->assertSessionHas('status', 'Inscription réussie !');
    }
}