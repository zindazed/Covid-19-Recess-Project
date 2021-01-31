<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function officers()
    {
        return $this->hasMany(Officer_patient::class);
    }

    public function heads()
    {
        return $this->hasMany(Head_patient::class);
    }
}
