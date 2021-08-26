<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    use HasFactory;

    public function setHash($request)
    {
        return $this->password_hash($request, PASSWORD_DEFAULT);
    }
}
