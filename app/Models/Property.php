<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The table associated with the model  
     * @var string
     */
    protected $table = 'properties';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price_per_night'
    ];

    /**
     * The users that belong to the property.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'bookings')
            ->withPivot('start_date', 'end_date')
            ->withTimestamps();
    }
}
