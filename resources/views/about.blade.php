<x-layout>
    @isset($member)

        <x-slot:heading>
            A propos de {{$member->name}}
        </x-slot:heading>

        <p>
            {{$member['name']}} est {{$member['job']}}
        </p>
        <p>
            Equipe : {{$member->team->name}}
        </p>

    @else
        <x-slot:heading>
            A propos de l'équipe
        </x-slot:heading>

        <ul>
            @foreach ($team as $teamMember)
                <li>
                    <a href="/about/{{$teamMember['id']}}">{{$teamMember['name']}}</a>
                </li>
            @endforeach
        </ul>
        <div>
            {{$team->links()}}
        </div>
    @endisset

</x-layout>
