<div>
    @include('livewire.components.titre', [
        'titre' => 'Verbo: aggiungere & modificare ',
        'fa' => 'fa-list-ul',
    ])

    <div class="p-3 mb-3 border border-ice-700">
        <form action="">
            <label class="block mb-3">
                <span class="text-gray-700">Verbo</span>
                <input type="text" wire:model="verbo"
                    class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                    placeholder="">
            </label>
            <label class="inline-flex items-center mb-3">
                <input type="checkbox" class="text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black">
                <span class="ml-2">Irregolari</span>
              </label>
            <label class="block mb-3">
                <span class="text-gray-700">Traduzione</span>
                <input type="text" wire:model="verbo"
                    class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                    placeholder="">
            </label>
            <div class="flex flex-row">
                <div class="p-2 my-2 rounded-lg bg-bay-300 hover:bg-bay-900 hover:text-ice-100 focus:bg-bay-100 focus:text-ice-900 focus:outline focus:outline-2">
                    <i class="fa-solid {{ $fa ?? "fa-plus"}}"></i>&nbspAggiugere una coniugazione
                </div>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700">Tempo</span>
                    <select class="block px-0.5 mt-0 w-full border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                      @foreach ($tempi as $tempo)
                          <option value="{{ $tempo->id }}">{{$tempo->name}}</option>
                      @endforeach
                    </select>
                  </label>
            </div>
        </form>
    </div>

</div>
