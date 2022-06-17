<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    protected $table = 'oefeningen';
    protected $fillable = ["naam", "beschrijving", "img"];
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
}
