<x-default-layout>

    <div class="corps">
        @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif

        <div class="sommaire-annuaire">
            <p class="titre">Annuaire</p>
            <p class="sous-titre">Annuaire économique</p>
            <div class="sectionAnnuaire">Commerces<br>
                Commerces itinérants<br>
                Artisans<br>
                Entreprises<br>
                Professions liberales<br>
                Professions médicales et para-médicales<br>
                Elevage et culture<br>
            </div>
            <p class="sous-titre">Annuaire associatif</p>
            <div class="sectionAnnuaire">Associations culturelles<br>
                Associations de Loisirs<br>
                Associations sportives<br>
            </div>
            <p class="sous-titre">Annuaire des services à la personne</p>
            <div class="sectionAnnuaire">Professionnels de santé<br>
                La M.A.R.P.A.<br>
                Assistant(e)s maternelles<br>
                L'U.N.A.<br>
                L'A.D.M.R.<br>
                Assistant(e) social(e)<br>
            </div>
            <p class="sous-titre">Divers</p>
            <div class="sectionAnnuaire">Agence postale<br>
                Médiathèque<br>
                Gendarmerie<br>
                Centre de secours<br>
            </div>
        </div>

        @if (isset($category) || isset($tag))
            <!-- Afficher le bouton uniquement si une catégorie ou un tag est défini -->
            <div class="retourAnnuaireGlobal">
                <a href="{{ route('annuaire') }}">Retour à l'annuaire global</a>
            </div>
        @endif
        <!--boucle sur toutes les entités-->
        @forelse ($annuaires as $annuaire)
            <x-entite :$annuaire list />
        @empty
        <div class="retourAnnuaireGlobal">
            <a href="{{ route('annuaire') }}">Retour à l'annuaire global</a>
        </div>
            <p class="text-slate-400 text-center">Aucun résultat.</p>
        @endforelse

    </div>

    {{ $annuaires->links() }}

</x-default-layout>
