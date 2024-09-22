<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['is_started', 'is_complete', 'origin', 'destination', 'destination_name', 'driver_location'];

    protected function casts(): array
    {
        return [
            'origin' => 'array',
            'destination' => 'array',
            'is_started' => 'boolean',
            'is_complete' => 'boolean'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
