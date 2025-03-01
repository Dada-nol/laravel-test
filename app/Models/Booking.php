<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = "bookings";

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id',
        'property_id',
        'start_date',
        'end_date'
    ];

    /**
     * The user that belong to the bookings.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The property that belong to the bookings.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
