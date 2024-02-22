<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productdetail extends Model
{
    use HasFactory;

    protected $table = 'productdetails';

    protected $fillable = ['name',
                           'description',
                           'price',
                           'category',
                           'quantity'];
}
