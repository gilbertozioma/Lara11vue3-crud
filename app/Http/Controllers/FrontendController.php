<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FrontendController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        
        return Inertia::render('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
        
        // return Inertia::render('Frontend/Home', compact('products'));
    }

    public function about() 
    {
        return Inertia::render('Frontend/About', [
            'title' => 'About Us Page'
        ]);
    }
}
