<x-layout>
    
    @if(isset($category) || isset($tag))
        <!-- Afficher le bouton uniquement si une catégorie est définie -->
        <div class="retourAnnuaireGlobal">
            <a href="{{ route('annuaire') }}">Retour à l'annuaire global</a>
        </div>        
    @endif
    @forelse ($annuaires as $annuaire)
     <x-entite :$annuaire list/>
    @empty
    <p class="text-slate-400 text-center">Aucun résultat.</p>  
    @endforelse 
    {{ $annuaires->links() }}
</x-layout>
    