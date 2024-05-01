<x-auth-layout name="Formulaire de contact" action="{{ route('envoyer') }}" submitMessage="Envoyer">
        <p>vous devez être connecté pour envoyer un message</p>
        <p>si vous n'êtes pas encore inscrit, <a href="{{ route('register') }}">Cliquez ici</a></p>
            <x-input name="name" label="Nom complet"/> 
            <x-input name="email" label="Adresse e-mail" type="email"/>
            <x-input name="subject" label="Objet" type="text"/>
            <x-input name="content" label="Votre message" type="textarea"/>                
</x-auth-layout>
    