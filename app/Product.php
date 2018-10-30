<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

	public $temp = false;

    protected $fillable = ['name','description','price','quantity'];
}
