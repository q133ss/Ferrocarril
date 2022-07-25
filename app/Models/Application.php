<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'currency',
        'genus',
        'comp',
        'date',
        'country_sender',
        'station_sender',
        'country_receiver',
        'station_receiver',
        'sender',
        'receiver',
        'code_cargo',
        'weight',
        'terms',
        'qty',
        'payer',
        'notes',
        'loading',
        'cost_in_kzt',
        'period',
        'user_id'
    ];

    public function user(){
        $this->hasOne(User::class , 'id', 'user_id');
    }
}
