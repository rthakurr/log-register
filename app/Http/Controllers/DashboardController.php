<?php
namespace App\Http\Controllers;

use App\Models\Product;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $productCount = Product::count();

        return view('dashboard', compact( 'productCount'));
    }
}
