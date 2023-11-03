<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveGroom extends Model
{
    use HasFactory;
    protected $table = 'grooms';
    protected $fillable = [
        'user_id',
        'lastname',
        'firstname',
        'middlename',
    ];
}
