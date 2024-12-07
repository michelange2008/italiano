<div>
    @include('livewire.components.titre', ['titre' => 'TUTTE LE PAROLE', 'fa' => 'fa-book-open'])
    
    <div class="m-1">
        <div class="flex justify-between items-center">
            <a href="">
                <button
                    class="p-2 my-2 rounded-lg bg-ice-500 hover:bg-ice-900 hover:text-ice-100 focus:bg-ice-100 focus:text-ice-900 focus:outline focus:outline-2">
                    <i class="fa-solid fa-circle-plus"></i> Ajouter
                </button>
            </a>
            <p class="p-2 font-bold bg-ice-900 text-ice-100">{{ $parole->count()}}&nbsp;parole</p>
        </div>

        <div class="p-2 rounded-sm border border-ice-900">
            @foreach ($parole as $parola)
                <div>
                    <div class="flex justify-between p-2 my-1 bg-ice-100">
                        <div>
                            <span class="text-xl">{{ ucfirst($parola->name) }}</span>
                            <span class="font-serif italic">({{ $parola->attribut->name }})&nbsp;:&nbsp;</span>
                            @foreach ($parola->francais as $francais)
                                @if ($loop->last)
                                    {{ $francais->name }}.
                                @else
                                    {{ $francais->name }},
                                @endif
                            @endforeach
                        </div>
                        <div>
                            <a href="{{ route('parola', ['id' => $parola->id]) }}">
                                <i class="fa-solid fa-pen-to-square text-ice-900"></i>
                            </a>
                        </div>
                    </div>
                    <div class="m-2 italic text-right text-ice-700">
                        @foreach ($parola->tags as $tag)
                            @if ($loop->last)
                                <span>{{ $tag->name }}.</span>
                            @else
                                <span>{{ $tag->name }},</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex gap-1 justify-start items-center">
            <p class="px-3 py-2 rounded-lg bg-ice-700">
                <i class="fa-solid fa-magnifying-glass"></i>
            </p>
            <input type="text" wire:model.live="ricerca"
            class="block mt-1 w-full bg-gray-100 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="cercare">
        </div>

    </div>
</div>
