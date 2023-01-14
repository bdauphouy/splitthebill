<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwesPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'requested_amount',
        'for_ticket_id',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'for_ticket_id');
    }
}
