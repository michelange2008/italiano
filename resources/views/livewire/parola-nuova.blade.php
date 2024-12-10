<div>
    @include('livewire.components.titre', ['titre' => 'Aggiungere una parola', 'fa' => 'fa-pen-nib'])

    <div class="p-2 m-1">
        <form wire:submit="create">
            <label class="block my-2">
                <span class="text-lg text-ice-700">Parola italiana</span>
                <div class="ml-3">
                    <input type="text" wire:model="nuova.name" id="italiano" required
                        class="block px-0.5 mt-0 w-full text-xl font-bold border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        placeholder="">
                </div>
            </label>

            <label class="block my-2">
                <span class="text-lg text-ice-900">Traduzione in francese</span>

                <div class="ml-3">
                    <input type="text" wire:model="nuova.francais" id="francais" required
                        class="block px-0.5 mt-0 w-full text-xl font-bold border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        placeholder="">
                </div>

            </label>

            <label class="block my-2">
                <span class="text-lg text-ice-900">Tipo di parola</span>
                <div class="ml-3">
                    <select wire:model="nuova.attribut_id" id="attribut" required
                        class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                        <option value="" disabled>scegliere</option>
                        @foreach ($attributs as $attrib)
                            <option value="{{ $attrib->id }}">{{ $attrib->name }}</option>
                        @endforeach
                    </select>
                </div>
            </label>

            <div class="block">
                <span class="text-lg text-ice-900">Etichette</span>
                <div class="grid grid-cols-2 mt-2 ml-3">
                    @foreach ($tags as $tag)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="nuova.tags" value="{{ $tag->id }}"
                                    class="text-gray-700 bg-gray-200 rounded border-transparent focus:border-transparent focus:bg-gray-200 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500">
                                <span class="ml-2">{{ ucfirst($tag->name) }} </span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex my-4">
                <button class="p-2 mx-1 bg-ice-300" type="submit">
                    <i class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
                @include('livewire.components.bouton-retour', ['route' => 'lista'])
            </div>
        </form>
    </div>

</div>
