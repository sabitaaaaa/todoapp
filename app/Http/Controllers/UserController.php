<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function recommendTrek(Request $request)
{
    $duration = $request->input('duration');
    $budget = $request->input('budget');
    $region = $request->input('region');
    $altitude = $request->input('altitude');
    $interest = $request->input('interest'); // array

    $treks = Trek::query()
        ->when($duration, fn($q) => $q->where('duration', '<=', $duration))
        ->when($budget, fn($q) => $q->where('budget', '<=', $budget))
        ->when($region, fn($q) => $q->where('region', $region))
        ->when($altitude, fn($q) => $q->where('altitude', $altitude))
        ->get()
        ->filter(function ($trek) use ($interest) {
            $tags = json_decode($trek->tags);
            return count(array_intersect($tags, $interest)) > 0;
        });

    return view('recommendations', compact('treks'));
}

}
