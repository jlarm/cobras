<?php

use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/{user:slug}', Index::class)->name('home');
