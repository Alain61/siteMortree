<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\NewCommentNotification;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $user;
    protected $comment;

    

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(): View //renvoi sur la page mon-compte apres inscription
    {
        return view('home.index');
    }

    //public function monCompte()
    //{
        //return view('home.index');
    //}

    //public function create(): View //envoi d'un mail à l'administrateur
    //{
        //$user = Auth::user();
        //$comment = new Comment();
        
        //return view('emails.new_comment_notification')->with('user', $user)->with('comment', $comment);
    //}
}
    
