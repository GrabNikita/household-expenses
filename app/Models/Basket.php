<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Basket extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'creator'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function creator() {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
}
