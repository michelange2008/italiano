<div x-data="{ show: 0 }">
    @include('livewire.components.titre', ['titre' => 'Lista di verbi', 'fa' => 'fa-list-ul'])

    <div>
        <a href="{{ route('verbo.edit') }}" x-show="show==0">
            @include('livewire.components.bouton-ok', ['texte' => 'Ajouter', 'fa' => 'fa-circle-plus'])
        </a>
        <button x-show="show!=0" @click="show=0"
            class="px-3 py-2 my-2 rounded-full text-bay-100 bg-bay-900 hover:bg-bay-300 hover:text-bay-900 focus:bg-bay-100 focus:text-bay-900 focus:outline focus:outline-2">
            <i class="fa-solid  {{ $fa ?? 'fa-globe' }}"></i>
            <span class="hidden md:visible">
                &nbsp;{{ $texte ?? 'cliquer' }}
            </span>
        </button>
    </div>

    <div>
        @foreach ($lista_di_verbi as $verbo)
            <div class="px-4 py-2 mb-2 shadow-md bg-fuel-300 hover:bg-fuel-400 shadow-terracotta-950/50" x-show="show==0"
                x-transition>
                <div class="cursor-pointer" @click="show = {{ $verbo->id }}"
                    wire:click="vedere_verbo({{ $verbo->id }})">
                    <span class="text-xl font-bold text-azure-900">{{ ucfirst($verbo->italiano) }}</span>
                    <span class="font-serif italic">
                        @if ($verbo->irregolare)
                            <span class="text-terracotta-900">(irregolare)</span>
                        @else
                            <span class="text-bay-900">(regolare)</span>
                        @endif
                    </span>
                    <p class="pl-5">{{ $verbo->francese }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-2 bg-fuel-300" x-show="show!=0" x-transition x-cloak>
        @if (!empty($verbo_a_vedere))
            <div class="p-3 text-xl font-bold text-center text-fuel-100 bg-fuel-950">
                {{ strtoupper($verbo_a_vedere['italiano']) }}
            </div>
            @foreach ($verbo_a_vedere['coniugazione'] as $tempo => $con)
                <div class="p-4 text-lg border">
                    <p class="font-bold">{{ ucfirst($tempo) }}</p>
                    <div class="grid grid-cols-1 grid-rows-6 gap-1 px-2 sm:grid-flow-col sm:grid-cols-2 sm:grid-rows-3">
                        @foreach ($con as $subject => $conjugated_form)
                            <div class="grid grid-cols-2 grid-rows-1 gap-2 justify-start">
                                <p class="italic text-right text-fuel-800">({{ $subject }})</p>
                                <p>{{ $conjugated_form }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>
