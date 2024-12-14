<div class="flex flex-col justify-between text-xl grow sm:text-lg">

    <div>
        @include('livewire.components.titre', ['titre' => 'TUTTE LE PAROLE', 'fa' => 'fa-book-open'])
        <div class="flex justify-between items-center m-1">
            <a href="{{ route('parola.nuova') }}">
                @include('livewire.components.bouton-ok', [
                    'fa' => 'fa-circle-plus',
                    'texte' => 'Aggiungiere',
                ])
            </a>
            @if ($tutti_button)
                <p class="px-4 py-2 my-2 rounded-lg text-bay-100 bg-bay-900 hover:bg-bay-300 hover:text-bay-900 focus:bg-bay-100 focus:text-bay-900 focus:outline focus:outline-2" wire:click="tutti">
                    <i class="fa-solid fa-globe"></i>&nbsp;Tutti
                </p>
            @endif
            <p class="px-4 py-2 font-bold bg-terracotta-900 text-bay-100">{{ $parole->count() }}&nbsp;parole</p>
        </div>

        <div class="px-2 py-2 rounded-sm border border-bay-900">
            @if ($parole->count() == 0)
                <div class="flex flex-row justify-between">
                    <p class="italic text-stack-500">
                        <i class="fa-regular fa-face-rolling-eyes"></i>
                        Nessuna parola
                    </p>

                </div>
            @else
                @foreach ($parole as $parola)
                    <div class="my-1">
                        <div class="flex justify-between px-2 py-3 bg-bay-100">
                            <div>
                                <span class="font-bold text-bay-900">{{ ucfirst($parola->name) }}</span>
                                <span
                                    class="font-serif italic text-terracotta-800">({{ $parola->attribut->name }})&nbsp;:&nbsp;</span>
                                <span class="text-bay-800">
                                    @foreach ($parola->francais as $francais)
                                        @if ($loop->last)
                                            {{ $francais->name }}
                                        @else
                                            {{ $francais->name }},
                                        @endif
                                    @endforeach
                                </span>
                            </div>
                            <div class="flex flex-row gap-2">
                                <a href="{{ route('parola', ['id' => $parola->id]) }}">
                                    <i class="fa-solid fa-pen-to-square text-bay-900"></i>
                                </a>
                                <div class="text-terracotta-800" wire:click="delete({{ $parola->id }})"
                                    wire:confirm="Sei securo.a di voler cancellare questa parola ?">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="italic text-right text-ice-700">
                            @foreach ($parola->tags as $tag)
                                @if ($loop->last)
                                    <span class="cursor-pointer"
                                        wire:click = "tag({{ $tag->id }})">{{ $tag->name }}</span>
                                @else
                                    <span class="cursor-pointer"
                                        wire:click = "tag({{ $tag->id }})">{{ $tag->name }},</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    <div class="flex sticky bottom-0 flex-row gap-2 justify-start items-center py-2 pl-2 m-1 bg-white">
        @if ($parole->count() == 0)
            <a href="{{ url('parola_nuova?nome=' . $ricerca) }}" class="text-xl text-bay-600" wire:click="addOne">
                <p class="px-3 py-2 rounded-lg bg-bay-300">
                    <i class="fa-solid fa-plus"></i>
                </p>
            </a>
        @else
            <p class="px-3 py-2 rounded-lg bg-stack-300">
                <i class="fa-solid fa-magnifying-glass"></i>
            </p>
        @endif
        <input type="text" wire:model.live="ricerca"
            class="block mt-1 w-full rounded-md border-transparent bg-stack-100 focus:border-gray-500 focus:bg-white focus:ring-0"
            placeholder="cercare">
    </div>
</div>
