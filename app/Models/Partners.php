<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partners extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function productpertanian()
    {
        return $this->hasMany(Productpertanian::class);
    }

    public function productanimalfarming()
    {
        return $this->hasMany(Productanimalfarming::class);
    }

    public function productplantations()
    {
        return $this->hasMany(Productplantations::class);
    }

}
