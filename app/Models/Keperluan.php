<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    use HasFactory;
    protected $guarded = [];

   
    public function keuangans()
    {
        return $this->hasMany(Keuangan::class, 'keperluan_id');
    }
}