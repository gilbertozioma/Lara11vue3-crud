<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        return Inertia::render('Frontend/Home', compact('products'));

        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }

    public function about() 
    {
        return Inertia::render('Frontend/About', [
            'title' => 'About Us Page'
        ]);
    }
}
