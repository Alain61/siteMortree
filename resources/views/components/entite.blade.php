@props(['annuaire', 'list' => false])
{{-- debut de l'entite --}}    
<div class="annuaire-entite">
    <div class="entite-nom">
        <strong>{{ $annuaire->name }}</strong>
    </div>
    @if(!$list)
        <div class="retourAnnuaire">
            <a href="{{ route('annuaire') }}">Fermer</a>
        </div><!--a revoir-->
    @else
        <div class="enSavoirPlus">
            <a href="{{ route('annuaires.show', ['annuaire'=> $annuaire]) }}">
                <p class="group">En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 iconPlus">
                            <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </p>
            </a>
        </div>
    @endif
    <div class="align">
        <div class="etiqMobile etiquette"><!--Category-->
            @if ($annuaire->category)
            <a href="{{ route('annuaires.byCategory', ['category'=>$annuaire->category]) }}">{{ $annuaire->category->worker }}</a>
            @endif
        </div>
        <div class="tags"><!--tag-->
            @if($annuaire->tags->isNotEmpty())<!--si une collection n'est pas vide: return true-->
                @foreach ($annuaire->tags as $tag)
                <a href="{{ route('annuaires.byTag', ['tag'=>$tag->slug]) }}" class="tag">{{ $tag->open }}</a>
                @endforeach
            @endif
        </div>
                        
        <div class="entite-tel">
            <p class="group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                class="w-4 h-4 tel">
                <path fill-rule="evenodd"
                    d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z"
                    clip-rule="evenodd" />
            </svg>
            {{ $annuaire->phone }}
            </p>
        </div>
    </div>
        <div class="entite-adresse">
            <p class="group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="w-4 h-4 address">
                    <path fill-rule="evenodd"
                        d="m7.539 14.841.003.003.002.002a.755.755 0 0 0 .912 0l.002-.002.003-.003.012-.009a5.57 5.57 0 0 0 .19-.153 15.588 15.588 0 0 0 2.046-2.082c1.101-1.362 2.291-3.342 2.291-5.597A5 5 0 0 0 3 7c0 2.255 1.19 4.235 2.292 5.597a15.591 15.591 0 0 0 2.046 2.082 8.916 8.916 0 0 0 .189.153l.012.01ZM8 8.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                        clip-rule="evenodd" />
                </svg>
                {{ $annuaire->adress }}
            </p>
        </div>

        <div class="texteEntreprise">
            @if(!$list)
            {!! nl2br(e($annuaire->content)) !!}<!--pour que chaques paragraphes apparaissent l'un en dessous de l'autre avec les retours à la ligne-->
            @endif
        </div>
    
    <div class="entite-mail">
        <p class="group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                class="w-4 h-4 enveloppe">
                <path
                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                <path
                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
            </svg>
            {{ $annuaire->mail }}
        </p>
    </div>
    @if(!$list)
        <time class="text-xs text-slate-400" datetime="{{ $annuaire->created_at }}">@datetime($annuaire->created_at)</time>
    @endif
</div>
{{-- fin de l'entite --}}