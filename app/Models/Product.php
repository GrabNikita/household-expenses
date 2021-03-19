<?php

namespace App\Models;

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
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function basketItem() {
        return $this->belongsTo(BasketItem::class);
    }
}
