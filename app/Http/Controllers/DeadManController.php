<?php

namespace App\Http\Controllers;

use App\Models\Death;
use Illuminate\Http\Request;

class DeadManController extends Controller
{
	public function index()
	{
		$death = death::find(2);
		dd($death);
		//  return 'საღამო ორი';
	}
}
