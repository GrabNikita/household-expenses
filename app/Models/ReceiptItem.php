<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ReceiptItem extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'receipt_id',
        'product_id',
        'amount',
    ];

    public function receipt() {
        return $this->belongsTo(Receipt::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
