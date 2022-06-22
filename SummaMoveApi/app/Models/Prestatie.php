<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestatie extends Model
{
    use HasFactory;

    protected $fillable = ["naam", "datum", "starttijd", "eindtijd"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
