<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Breed;
use App\Models\Feedlot;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $animals = Animal::all();
        $breeds = Breed::all();
        $feedlots = Feedlot::all();

        $data['total_animals'] = $animals->count();
        $data['total_breeds'] = $breeds->count();
        $data['total_feedlots'] = $feedlots->count();

        //echo count($data);exit;
        //dd($data);
        return view('dashboard', $data);
    }
}
