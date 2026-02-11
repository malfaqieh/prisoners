<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prisoner extends Model
{
    protected $table = 'prisoners';
    protected $fillable = [
        'first_name',
        'last_name',
        'national_id',
        'prisoner_number',
        'prisoner_card_id',
        'phone_number',
        'date_of_birth',
        'entry_date',
        'is_active'
    ];
   
}
