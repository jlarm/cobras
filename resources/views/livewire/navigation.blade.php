<div class="flex justify-center gap-x-12 border-b pb-3 mb-10">
    <a wire:navigate href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('stats.index')) ? 'text-orange-500' : 'text-gray-900' }}">Home</a>
    <a wire:navigate href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('stats.index')) ? 'text-orange-500' : 'text-gray-900' }}">Players</a>
    <a wire:navigate href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('stats.index')) ? 'text-orange-500' : 'text-gray-900' }}">Coaches</a>
    <a wire:navigate href="{{ route('team.index', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.index', $user->slug)) ? 'text-orange-500' : 'text-gray-900' }}">Upcoming Games</a>
    <a wire:navigate href="{{ route('team.past-games', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.past-games')) ? 'text-orange-500' : 'text-gray-900' }}">Past Games</a>
</div>
