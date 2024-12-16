<button
    class="px-4 py-2 my-2 rounded-lg text-bay-100 bg-bay-900 hover:bg-bay-300 hover:text-bay-900 focus:bg-bay-100 focus:text-bay-900 focus:outline focus:outline-2"
    wire:click="{{ $action ?? ''}}">
    <i class="fa-solid  {{ $fa ?? "fa-check" }}"></i>&nbsp;{{ $texte ?? "cliquer"}}
</button>
