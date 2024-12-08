<div x-data="{ edit: @entangle('edit') }">
    @include('livewire.components.titre', [
        'titre' => "Creare e modificare un'etichetta",
        'fa' => 'fa-pen-nib',
    ])

    <div class="m-3">
        <div class="flex flex-row gap-2 items-center mr-4"">
            <input type="text" wire:model="nuova"
                id="nuova"
                class="block mt-1 w-full bg-gray-100 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder="Nuova etichette">
            <button wire:click="create">
                <i class="fa-solid fa-floppy-disk"></i>
            </button>
        </div>

        @foreach ($tags as $tag)
            <div class="flex justify-between p-2 my-2 bg-ice-300">
                <div>
                    <p x-show="edit!={{ $tag->id }}">
                        {{ $tag->name }}
                    </p>
                    <div class="flex flex-row gap-2 items-center mr-4" x-show="edit == {{ $tag->id }}">
                        <input type="text" wire:model="name"
                            id="tag-{{ $tag->id }}"
                            class="block mt-1 w-full bg-gray-100 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                            placeholder="{{ $tag->name }}">
                        <button wire:click="update({{$tag->id}})">
                            <i class="fa-solid fa-floppy-disk"></i>
                        </button>
                    </div>
                </div>
                <div class="flex flex-row gap-3" x-show="edit!={{ $tag->id }}">
                    <button wire:click="editer({{ $tag->id }})">
                        <i class="text-ice-900 fa-solid fa-pen-to-square"></i>
                    </button>
                    <button wire:click="delete({{ $tag->id }})"
                        wire:confirm="Sei securo.a di voler cancellare questa etichetta ?">
                        <i class="fa-solid fa-trash text-brique-500"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

</div>
