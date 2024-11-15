<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected  $table = 'user_profiles';
    protected $fillable = [
        'user_id',
        'cellphone',
        'city',
        'state',
        'country',
        'age',
        'birthday',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
