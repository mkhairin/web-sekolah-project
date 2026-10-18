<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function inventory()
    {
        return view('inventory');
    }

    public function addProduct()
    {
        return view('add-product');
    }

    public function reports()
    {
        return view('reports');
    }
}
