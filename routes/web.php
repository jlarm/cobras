<?php

use App\Livewire\Index;
use App\Livewire\PastGames;
use App\Livewire\PastIndex;
use Illuminate\Support\Facades\Route;

Route::get('/{user:slug}', Index::class)->name('team.index');
Route::get('/{user:slug}/past-games', PastIndex::class)->name('team.past-games');
