<x-layout>
    <x-slot:heading>
        Accueil
    </x-slot:heading>

    @isset($name)
        <h2>Bienvenue sur Laravel, {{$name}}</h2>
    @else
        <h2>Bienvenue sur Laravel</h2>
    @endisset
    
</x-layout>


