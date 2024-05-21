<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $name }}</title><!--utilisation de la fonction html special char, protege de la faille xss-->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Indie+Flower&family=Playball&display=swap"
            rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="h-full">
        <header class="header">
            <div class="en-tete">
                <a href="{{ route('accueil') }}"><img class="logo"
                        src="{{ asset('./MortréePhotos/blason Mortrée.PNG') }}"
                        alt="écusson"></a><!--renverra à la page index.html/ pour le moment à annuaire.blade.php-->
                <div class="background fondNom">
                    <div class="nom">Commune de MORTRÉE</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20 " fill="currentColor"
                    class="w-4 h-4 menu-toggle">
                    <path fill-rule="evenodd"
                        d="M2 2.75A.75.75 0 0 1 2.75 2h9.5a.75.75 0 0 1 0 1.5h-9.5A.75.75 0 0 1 2 2.75ZM2 6.25a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 2 6.25Zm0 3.5A.75.75 0 0 1 2.75 9h3.5a.75.75 0 0 1 0 1.5h-3.5A.75.75 0 0 1 2 9.75ZM14.78 11.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V6.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="miseEnPage">
                <div class="img">
                    <img src="{{ asset('./MortréePhotos/IMGPageHTML.jpg') }}" alt="Vue aérienne du centre-bourg"
                        class="imgAccueil">
                </div>
            </div>
        </header>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        {{-- Formulaire d'authentification --}}
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <a href="{{ route('accueil') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 text-slate-900">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                </a>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
                <div class="bg-white px-6 py-12 shadow sm:rounded-lg sm:px-12">
                    <form action="{{ $action }}" method="POST" novalidate>
                        @csrf
                        <div class="space-y-6">
                            {{ $slot }}
                        </div>
                        <div>
                            <button type="submit"
                                class=" mt-6 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                {{ $submitMessage }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
