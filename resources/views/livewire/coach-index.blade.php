<div>
    <livewire:banner :$user />
    <div class="max-w-4xl mx-auto mt-20 px-3 md:px-0 z-20">
        <livewire:navigation :$user />
    </div>
    <div class="w-full max-w-4xl mx-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @foreach($coaches as $coach)
                <div class="flex flex-col items-center justify-between bg-white text-slate-600 group p-3 border rounded-lg">
                    <div class="mb-5">
                        @if($coach->avatar)
                            <img class="inline-block h-20 w-20 rounded-full" src="{{ asset($coach->avatar) }}" alt="">
                        @else
                            <span class="inline-flex h-20 w-20 items-center justify-center rounded-full bg-orange-500">
                              <span class="text-4xl font-medium leading-none text-black">{{ $coach->initials }}</span>
                            </span>
                        @endif
                    </div>
                    <div class="text-center">
                        <p>{{ $coach->name }}</p>
                        <p>{{ $coach->email }}</p>
                        <p>{{ $coach->phone }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
