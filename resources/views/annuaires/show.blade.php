<x-default-layout :name="$annuaire->name" :category="$annuaire->category->worker ?? null" :tags="$annuaire->tag->open ?? null" >
    
    <div class="corps">
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

        <div class="presentation"><!--penser à rajouter la colonne dirigeant ici et sur la BdD-->
            @if ($annuaire->category)
                <div class="etiquette">{{ $annuaire->category->worker }}</div>
            @endif
            <div class="retourAnnuaire">

                <a href="javascript:history.go(-1)">Fermer</a>

            </div><!--a revoir-->
            <div class="nomEntreprise">
                <strong>{{ $annuaire->name }}</strong>
            </div>
            <div class="dirigeant">{{ $annuaire->manager }}</div>
            <div class="adresseEntreprise">
                <p class="group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 address fix">
                        <path fill-rule="evenodd"
                            d="m7.539 14.841.003.003.002.002a.755.755 0 0 0 .912 0l.002-.002.003-.003.012-.009a5.57 5.57 0 0 0 .19-.153 15.588 15.588 0 0 0 2.046-2.082c1.101-1.362 2.291-3.342 2.291-5.597A5 5 0 0 0 3 7c0 2.255 1.19 4.235 2.292 5.597a15.591 15.591 0 0 0 2.046 2.082 8.916 8.916 0 0 0 .189.153l.012.01ZM8 8.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{ $annuaire->adress }}
                </p>
            </div>
            <div class="texteEntreprise">
                {!! nl2br(e($annuaire->content)) !!}<!--pour que chaques paragraphes apparaissent l'un en dessous de l'autre avec les retours à la ligne-->
            </div>
            <div class="telEntreprise">
                <p class="group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 tel fix">
                        <path fill-rule="evenodd"
                            d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{ $annuaire->phone }}
                </p>
            </div>
            <div class="mailEntreprise">
                <p class="group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 enveloppe fix">
                        <path
                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                        <path
                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                    </svg>
                    {{ $annuaire->mail }}
                </p>
            </div>
            <div class="size"><time class="text-xs text-slate-400" datetime="{{ $annuaire->created_at }}"></time>
            </div>
        </div>

    </div>
</x-default-layout>
