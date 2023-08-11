<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UserAdmin extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $table = 'user_admin';
}
