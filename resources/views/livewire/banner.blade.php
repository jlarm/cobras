<div class="relative">
    @if($this->user->banner_image)
        <img src="{{ asset($this->user->banner_image) }}" alt="" class="h-96 w-full object-cover object-center">
    @else
        <img src="{{ asset('bg.svg') }}" alt="" class="h-96 w-full object-cover object-center">
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
    <div class="w-full max-w-4xl mx-auto h-96 -mt-96 z-10 relative flex items-center justify-center">
        <div class="w-full backdrop-blur py-10 px-20 rounded-lg mt-72">
            <img class="w-48 h-auto mx-auto mt-5" src="{{ asset('cobras.png') }}" alt="">
            <h1 class="font-bold text-5xl text-center">{{ $user->name }} {{ $user->division }}</h1>
        </div>
    </div>
</div>
