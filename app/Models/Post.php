<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'html',
    ];

    public function title(): Attribute
    {
        return Attribute::set(fn ($value) => Str::title($value));
    }

    public function body(): Attribute
    {
        return Attribute::set(fn($value) =>[
            'body' => $value,
            'html' => str($value)->markdown(),
        ]);
    }

    function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
