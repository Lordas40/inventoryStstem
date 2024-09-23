<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
class Item extends Model
{
    use HasFactory;

    // kurie stulpeliai gali būti užpildomi
    protected $fillable = ['name', 'category', 'quantity', 'location', 'condition', 'supplier_id'];

    // rysis su tiekejais
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
