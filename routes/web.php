<?php

use App\Livewire\CoachIndex;
use App\Livewire\Index;
use App\Livewire\PastIndex;
use App\Livewire\PlayerIndex;
use Illuminate\Support\Facades\Route;

Route::get('/{user:slug}', Index::class)->name('team.index');
Route::get('/{user:slug}/past-games', PastIndex::class)->name('team.past-games');
Route::get('/{user:slug}/players', PlayerIndex::class)->name('team.players');
Route::get('/{user:slug}/coaches', CoachIndex::class)->name('team.coaches');
