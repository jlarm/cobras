<?php

namespace App\Models;

use App\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Tournament extends Model
{
    protected $fillable = [
        'user_id',
        'uuid',
        'name',
        'start_date',
        'end_date',
        'city',
        'state',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts()
    {
        return [
            'uuid' => 'string',
            'start_date' => 'date',
            'end_date' => 'date',
            'state' => State::class,
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tournament) {
            $tournament->user_id = auth()->id();
            $tournament->uuid = (string) Str::uuid();
        });
    }

}