<div class="p-2">

    @include('livewire.components.titre', 
        ['titre' => $parola->name]
    )

    <div class="italic">
        {{ ucfirst($parola->attribut->name)}}
    </div>

    @foreach ($parola->francais as $francais)
        <div class="my-3 text-lg font-bold text-ice-700">
            {{ $francais->name }}
        </div>
    @endforeach

    @include('livewire.components.bouton-retour', ['route' => 'dashboard'])

</div>
