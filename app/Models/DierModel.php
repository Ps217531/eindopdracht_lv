<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DierModel extends Model
{
    use HasFactory;


    protected $table = "dieren";

    protected $fillable =['dier', 'chipnummer'];



}
