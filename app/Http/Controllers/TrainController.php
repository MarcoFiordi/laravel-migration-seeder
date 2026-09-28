<?php
namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
{
    $trains = Train::whereDate('departure_time', '>=', now()->toDateString())
        ->orderBy('departure_time', 'asc')
        ->get();

    return view('home', [
        'trains' => $trains
    ]);
}
}
