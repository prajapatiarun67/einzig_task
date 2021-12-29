<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserModel extends Model
{
    use HasFactory; 
    use Notifiable;
    use SoftDeletes;

    protected $table = 'einzig_user';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'date_time',
        'image', 
    ];
}
