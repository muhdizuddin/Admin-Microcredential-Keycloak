<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    public $table = "course";
    public $timestamps = false;
    public $fillable = [
		'coursecode','coursetitle','courseinfo','category',
	];
}