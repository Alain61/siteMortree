<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Annuaire;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;



class AnnuaireController extends Controller
{
    //methode pour renvoyer la vue annuaire global
    //avec la recherche dans le champ de recherche du formulaire
    public function annuaire(Request $request): View
    {
        return $this->annuairesView($request->search ? ['search' => $request->search] : []);
    }

    //methode pour renvoyer la vue annuaire par categorie 
    public function annuairesByCategory(Category $category): View
    {
        return $this->annuairesView(['category'=>$category]);
        
    }
    //methode pour renvoyer la vue annuaire par tag 
    public function annuairesByTag(Tag $tag): View
    {
        return $this->annuairesView(['tag'=>$tag]);
    }

    protected function annuairesView(array $filters): View
    {
        $category = $filters['category'] ?? null;
        $tag = $filters['tag'] ?? null;
        
        return view('annuaires.annuaire', [
            'annuaires'=> Annuaire::filters($filters)->latest()->paginate(6),
            'category'=>$category,
            'tag'=>$tag,
            

        ]);
    }
    //methode pour renvoyer à la page de connexion
    public function pageConnexion() {
        return view('connexion');
    }

    //methode pour renvoyer la vue de presentation d'une entité des annuaires (global, par catégories et par tags)
    public function show(Annuaire $annuaire): View
    {
        $back = $annuaire->category ? 'byCategory' : 'global';
        return view('annuaires.show', [
            'back'=>$back,
            'annuaire' =>$annuaire,
        ]);
    }
    
}
