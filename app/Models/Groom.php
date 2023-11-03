<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groom extends Model
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

// class Bride extends Model
// {
//     use HasFactory;
//     protected $table = 'grooms';
//     protected $fillable = [
//         'user_id',
//         'lastname',
//         'firstname',
//         'middlename',
//     ];
// }


