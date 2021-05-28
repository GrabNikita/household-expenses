<?php

namespace App\Models;

use App\Casts\ProductUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model {
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'manufacturer_id',
        'unit',
        'amount',
        'amount_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'unit' => ProductUnit::class,
    ];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function markets() {
        return $this->belongsToMany(Market::class);
    }
}
