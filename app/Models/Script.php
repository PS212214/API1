<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    use HasFactory;
    //timespams worden NIET gebruikt in DB
    public $timestamps = false;
    protected $fillable = ['naam', 'bestand', 'volgorde', 'hoofdstuk_id'];




}
