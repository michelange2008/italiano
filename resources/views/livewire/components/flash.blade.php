@if (session()->has('message'))
    <div class="p-2 bg-bay-300 text-bay-950">
        {{ session('message') }}
    </div>
@endif
