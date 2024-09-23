<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    //  stulpeliiai kurie gali buti uzpildomi
    protected $fillable = ['name', 'contact_info'];

    // rysys su Item modeliu (jei reikes)
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
