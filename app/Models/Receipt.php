<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Receipt extends Model {

    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'user',
        'basket_id',
        'market_id',
        'purchase_date'
    ];

    protected $casts = [
        'purchase_date' => 'datetime',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function basket() {
        return $this->belongsTo(Basket::class);
    }

    public function market() {
        return $this->belongsTo(Market::class);
    }
}
