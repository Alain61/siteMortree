<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\NewCommentNotification;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\View\Component;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function showContactForm(): View
    {
        return view('home.contact');
    }

    public function envoyer(Request $request) //validation et envoi en BdD
    {  
        // Validation des données du formulaire de contact
        $request->validate([
            'name' =>['required', 'string'],
            'email' => ['required', 'email'],
            'content' => ['required', 'string'],
            'subject' => ['required', 'string'],            
        ]);        
        
        // Vérifier si l'utilisateur est connecté
        if (Auth::check()) {
            // Récupérer l'utilisateur connecté
            $user = Auth::user();
            $userId = Auth::id();

            
            //crée un nouveau commentaire avec les données fourni
            if($userId)
            {
                $comment = Comment::create([                  
                    'user_id'=>Auth::id(),
                    'subject'=>$request->subject,
                    'content'=>$request->content,            
                ]);
            }            
            
            // Envoi d'un e-mail à l'administrateur avec les détails du commentaire
            Mail::to('launaydeshaies@hotmail.fr')->send(new NewCommentNotification($comment, $user));

            // Redirection de l'utilisateur vers la page d'accueil après l'enregistrement du commentaire
            return redirect()->route('accueil')->with('success', 'Votre message a été envoyé avec succès.');

        } else {
            // Redirection vers la page de connexion
            return redirect()->route('login')->with('error', 'Vous devez vous connecter pour envoyer un message.');
        }
    }
}

