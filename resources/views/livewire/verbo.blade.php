<div x-data="{ temps_choisi: '', color: 'ice' }">
    @include('livewire.components.titre', [
        'titre' => 'Verbo: aggiungere & modificare ',
        'fa' => 'fa-list-ul',
    ])
    @include('livewire.components.flash')

    <div class="p-3 mb-3 border border-ice-700">
        <form wire:submit="salvare_verbo">
            <label class="block mb-3">
                <span class="text-gray-700">Verbo</span>
                <input type="text" wire:model="verbo_nuovo.italiano" required
                    class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                    placeholder="">
            </label>
            <label class="inline-flex items-center mb-3">
                <input type="checkbox" wire:model="verbo_nuovo.irregolare"
                    class="text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black">
                <span class="ml-2">Irregolari</span>
            </label>
            <label class="block mb-3">
                <span class="text-gray-700">Traduzione</span>
                <input type="text" wire:model="verbo_nuovo.francese" required
                    class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                    placeholder="">
            </label>

            <div>
                @foreach ($verbo_nuovo['coniugazione'] as $tempo => $con)
                    <div @click="temps_choisi='{{ $tempo }}'"
                        @click.outside="temps_choisi!='{{ $tempo }}'"
                        class="p-3 my-1 bg-ice-300 focus:bg-terracotta-300">
                        <p>{{ ucfirst($tempo) }}</p>
                        <div class="m-3">
                            @foreach ($con as $pp => $value)
                                <div class="flex flex-row mb-1" x-show="temps_choisi == '{{ $tempo }}'">
                                    <label
                                        class="p-2 basis-1/2 sm:basis-1/3 md:basis-1/4 bg-bay-700 text-bay-200">{{ $pp }}</label>
                                    <input type="text"
                                        wire:model="verbo_nuovo.coniugazione.{{ $tempo }}.{{ $pp }}"
                                        class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                                        placeholder="">
                                </div>
                            @endforeach
                        </div>

                        @foreach ($con as $pp => $conj)
                            @if ($conj != '')
                                <p>{{ $pp }}: {{ $conj }}</p>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="flex flex-row gap-1">
                @include('livewire.components.bouton-ok', ['texte' => 'Salvare', 'fa' => 'fa-save'])
                @include('livewire.components.bouton-retour', ['route' => 'verbi'])
            </div>
        </form>
    </div>

</div>
