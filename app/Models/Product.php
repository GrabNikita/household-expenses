<?php

namespace App\Models;

use App\Casts\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'manufacturer_id',
        'basket_item_id',
        'unit',
        'amount',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'unit' => Unit::class,
    ];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function basketItem() {
        return $this->belongsTo(BasketItem::class);
    }

    public function markets() {
        return $this->belongsToMany(Market::class);
    }
}
