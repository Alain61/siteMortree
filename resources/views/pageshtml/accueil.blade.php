<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Commune de Mortrée</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Cherry+Bomb+One&family=Chicle&family=Galada&family=Grechen+Fuemen&family=Lemon&family=Modak&family=Pacifico&family=Permanent+Marker&family=Sedgwick+Ave+Display&family=Sofia&family=Spicy+Rice&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Indie+Flower&family=Playball&display=swap"
        rel="stylesheet">
    
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    

</head>

<body>
    <header class="header">
        <div class="en-tete">
            <a href="{{ route('accueil') }}"><img class="logo" src="./MortréePhotos/blason Mortrée.PNG" alt="écusson"></a>
            <div class="fondNom background">
                <div class="nom">Commune de Mortrée</div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20 " fill="currentColor"
                class="w-4 h-4 menu-toggle">
                <path fill-rule="evenodd"
                    d="M2 2.75A.75.75 0 0 1 2.75 2h9.5a.75.75 0 0 1 0 1.5h-9.5A.75.75 0 0 1 2 2.75ZM2 6.25a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 2 6.25Zm0 3.5A.75.75 0 0 1 2.75 9h3.5a.75.75 0 0 1 0 1.5h-3.5A.75.75 0 0 1 2 9.75ZM14.78 11.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V6.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="desktop">
            <nav class="navbar nav-mobile">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-4 h-4 retour-menu">
                    <path fill-rule="evenodd"
                        d="M2 2.75A.75.75 0 0 1 2.75 2h9.5a.75.75 0 0 1 0 1.5h-9.5A.75.75 0 0 1 2 2.75ZM2 6.25a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 2 6.25Zm0 3.5A.75.75 0 0 1 2.75 9h3.5a.75.75 0 0 1 0 1.5h-3.5A.75.75 0 0 1 2 9.75ZM9.22 9.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V8.56l-.97.97a.75.75 0 0 1-1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
                <ul class="nav-menu">
                    <li class="nav-item mobile-item">À la Une
                        <ul class="item-menu dropdown">
                            <li class="sous-liste drop-item"><a href="#">Les news</a></li>
                            <li class="sous-liste drop-item"><a href="#">Les évènements</a></li>
                            <li class="sous-liste drop-item"><a href="#">Le bulletin municipal</a></li>
                            <li class="sous-liste drop-item"><a href="#">Les projets d'aménagements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mobile-item">Ma mairie
                        <ul class="item-menu dropdown">
                            <li class="sous-liste drop-item"><a href="#">Le conseil municipal</a></li>
                            <li class="sous-liste drop-item"><a href="#">Le personnel administratif</a></li>
                            <li class="sous-liste drop-item"><a href="#">Le personnel technique</a></li>
                            <li class="sous-liste drop-item"><a href="#">Les démarches administratives</a></li>
                            <li class="sous-liste drop-item"><a href="#">Les biens communaux</a></li>
                        </ul>
                    </li>
                    <li class="nav-item3 mobile-item">Bien vivre à Mortrée
                        <ul class="item-menu1 dropdown">
                            <li class="items-sous-liste1 drop-item mobil">
                                Mortrée et ses services
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Agence postale</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Gendarmerie</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Centre de secours</a>
                                    </li>
                                    <li class="sous-item-sous-liste sous-sous-menu nodisc sous-item">
                                        Vie Scolaire
                                        <ul class="itemFond">
                                            <li class="sous-item-sous-liste Fond"><a href="#">Soutien scolaire</a></li>
                                        </ul>
                                    </li>
                                    <li class="sous-item-sous-liste sous-sous-menu nodisc sous-item">
                                        Vie périscolaire
                                        <ul class="itemFond">
                                            <li class="sous-item-sous-liste Fond"><a href="#">Garderie</a></li>
                                            <li class="sous-item-sous-liste Fond"><a href="#">Cantine</a></li>
                                            <li class="sous-item-sous-liste Fond"><a href="#">Inscription</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="items-sous-liste2 drop-item mobil">

                                Services et aide à la personne
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Professionnels de
                                            santé</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">La M.A.R.P.A.</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Les assistantes
                                            maternelles</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">L'U.N.A </a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">L'A.D.M.R.</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Assistant(e)
                                            social(e)</a></li>

                                </ul>
                            </li>
                            <li class="items-sous-liste3 drop-item mobil">
                                Vie économique
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Les commerces</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Les commerces
                                            itinérants</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Artisans</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Entreprises</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Professions
                                            libérales</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Marché</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Agriculture
                                            et élevage</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="{{ route('annuaire') }}">Annuaire</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="items-sous-liste4 drop-item mobil">
                                Culture, Sports et Loisirs
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Médiathèque</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Equipements sportifs</a>
                                    </li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Equipements de
                                            loisirs</a></li>
                                </ul>
                            </li>
                            <li class="items-sous-liste5 drop-item mobil">
                                Vie associative
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Associations
                                            sportives</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Associations
                                            culturelles</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Autres associations</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="items-sous-liste6 drop-item mobil">
                                Histoire et patrimoine
                                <ul class="item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Histoire</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Patrimoine</a></li>
                                </ul>
                            </li>
                            <li class="items-sous-liste7 drop-item mobil">
                                Infos pratiques
                                <ul class="sous-item-sous-liste1 item-sous-menu sous-menu">
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Tourisme</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Salle des fêtes</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Se loger à Mortrée</a>
                                    </li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Gestion des déchets</a>
                                    </li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Covoiturage, parkings et
                                            bornes de recharge</a></li>
                                    <li class="sous-item-sous-liste sous-sous-menu"><a href="#">Cimetière</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mobile-item">Contact
                        <ul class="item-menu dropdown">
                            <li class="sous-liste drop-item"><a href="{{ route('login') }}">Connexion</a></li>
                            <li class="sous-liste drop-item"><a href="{{ route('register') }}">Inscription</a></li>
                            <li class="sous-liste drop-item"><a href="{{ route('contact') }}">Nous contacter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mobile-item"><a href="#">C.D.C</a></li>
                </ul>
            </nav>

        </div>

    </header>
    <div class="miseEnPage">
        <div class="img">
            <img src="./MortréePhotos/IMGPageAccueil_20230624_202835.jpg" alt="Vue aérienne du centre-bourg"
                class="imgAccueil">
        </div>
        <div class="groupe">
            <div class="caseInfos">Infos &rArr;</div>
            <div class="container">
                <span class="msg">Il est demandé à chaque propriétaire de bien vouloir faire
                    le nécessaire avec les dejections de leur animal</span>
                <span class="msg">Message2qszedrftyu^wxcvbn,;:azertyuiopikolpmqsdfghjklxcvbnhj,k</span>
                <span class="msg">Message3qsdfghjklmzaertyu^qsdfghjklmùazertyuiopiopwxcvbn,;</span>
                <!-- Ajoutez autant de messages que nécessaire -->
            </div>
        </div>
    </div>
    {{-- Navigation --}}
    <nav x-data="{ open: false }" x-cloak class="relative">
        <button
            @click = "open = !open"
            @click.outside="if (open) open = false"
            @class([
                'w-8 h-8 flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',//peu importe ce qu'il se passe
                'md:hidden'=>Auth::guest(),//seulement quand l'utilisateur est un guest
            ])            
        >
            @auth
            <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/120x120" alt="Image de profil">   
            @else
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
            @endauth
        </button>

        <ul
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            @class([
                'absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none',
                'md:hidden'=> Auth::guest(),
            ])
            
            tabindex="-1"
        >
            @auth
            <li><a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mon compte</a></li>
            <li><a href="{{ route('logout') }}"  @click.prevent="$refs.logout.submit()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Déconnexion</a></li>
            <form x-ref="logout" action="{{ route('logout') }}" method='POST' class="hidden">
                @csrf
            </form>
            @else
            <li><a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Connexion</a></li>
            <li>
                <a href="{{ route('register') }}" class="flex items-center px-4 py-2 font-semibold text-sm text-indigo-700 hover:bg-gray-100">
                    Inscription
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-1">
                        <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
            @endauth
        </ul>
        
        @guest
        <ul class="hidden md:flex space-x-12 font-semibold">
            <li><a href="{{ route('login') }}">Connexion</a></li>
            <li>
                <a href="{{ route('register') }}" class="flex items-center group text-indigo-700">
                    Inscription
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1 group-hover:ml-2 group-hover:mr-0 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </li>
        </ul>
        @endguest
    </nav>
    <!--si il y a une session flash, j'affiche le message et l'icone-->
    @if(session('status'))
    <div class="mt-10 rounded-md bg-green-50 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
            </div>
        </div>
    </div>  
    @endif

    <main>
        {{--{{ $slot }}--}}
    </main>
</body>

</html>