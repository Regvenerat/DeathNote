<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
	use HasFactory;

	//  არა აუცილებელი ველი თუ სხვა ტეიბალზე არ ვმუშაობ
	protected $table = 'deaths'; 
}
