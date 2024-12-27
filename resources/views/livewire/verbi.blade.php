<div>
    @include('livewire.components.titre', ['titre' => 'Lista di verbi', 'fa' => 'fa-list-ul'])

    <div>
        <a href="{{ route('verbo')}}">
            @include('livewire.components.bouton-ok', ['texte' => 'Ajouter', "fa" => "fa-circle-plus"])
        </a>
    </div>

    <div>
        @foreach ($lista_di_verbi as $verbo)
            <div class="px-4 py-2 mb-2 bg-fuel-300">
                <p>
                    <span class="text-xl font-bold text-azure-900">{{ ucfirst($verbo->name)}}</span>
                    <span class="text-stack-500">
                        &nbsp;(gruppo {{ $verbo->group}})&nbsp;
                    </span>
                    <span class="font-serif italic">
                        @if ( $verbo->is_irregular )
                            <span class="text-terracotta-900">irregolare</span>
                        @else
                            <span class="text-bay-900">regolare</span>
                        @endif
                    </span>
                </p>
                <p class="pl-5">{{ $verbo->definition}}</p>
            </div>
        @endforeach
    </div>

</div>
