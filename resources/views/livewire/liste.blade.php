<div>
    <div class="px-2">

        @include('livewire.components.titre', ['titre' => "PAROLE"])
        
        <div class="p-2 border border-ice-900">
            @foreach ($parole as $parola)
            <div class="p-2 my-2 bg-ice-100">
                <a href="{{ route('parola', ['id' => $parola->id]) }}">
                    {{ $parola->name}}
                </a>
            </div>
            @endforeach
            
            
        </div>
</div>

</div>
