<div>
    @include('livewire.components.titre', ['titre' => 'Aggiungere una parola', 'fa' => 'fa-pen-nib'])

    <div class="p-2 m-1">
        <form wire:submit="create">
            <label class="block my-2">
                <span class="text-xl sm:text-lg text-bay-700">Parola italiana</span>
                <div class="ml-3">
                    <input type="text" wire:model="nuova.name" key="italiano" required autofocus
                        class="block px-0.5 mt-0 w-full text-xl font-bold border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        placeholder="">
                        @error('nuova.name') <span class="italic text-terracotta-800">{{ $message }}</span> @enderror
                </div>
            </label>

            <label class="block my-2">
                <span class="text-xl sm:text-lg text-bay-900">Traduzione in francese</span>

                <div class="ml-3">
                    <input type="text" wire:model="nuova.francais" id="francais" required
                        class="block px-0.5 mt-0 w-full text-xl font-bold border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        placeholder="">
                </div>

            </label>

            <label class="block my-2">
                <span class="text-xl sm:text-lg text-bay-900">Tipo di parola</span>
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
                <span class="text-xl sm:text-lg text-bay-900">Etichette</span>
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

            <div class="flex gap-2 my-4">
                @include('livewire.components.bouton-ok', [
                    'texte' => 'Enregistrer',
                    'fa' => 'fa-floppy-disk',
                    ])
                @include('livewire.components.bouton-retour', [
                    'texte' => 'Annuler',
                    'route' => 'lista'
                    ])
            </div>
        </form>
    </div>

</div>
