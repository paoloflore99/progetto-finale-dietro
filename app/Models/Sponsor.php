<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "price",
        "duration",
        "payment_report"
    ];

    protected $table = 'sponsors';

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class);
    }
}
