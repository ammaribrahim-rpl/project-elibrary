<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalBooks = Books::count();
        $totalUsers = User::where('role', 'user')->count();
        $books = Books::latest()->take(5)->get();
        
        return view('dashboard.index', compact('totalBooks', 'totalUsers', 'books'));
    }
}
