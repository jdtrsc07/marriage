<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveBride extends Model
{
    
    use HasFactory;
    protected $table = 'brides';
    protected $fillable = [
        // 'user_id',
        // 'lastname',
        // 'firstname',
        // 'middlename',
    ];
}
