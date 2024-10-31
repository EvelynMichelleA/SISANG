<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model correctly
use App\Models\Transaction; // Import Transaction model correctly

class DashboardController extends Controller
{
    public function index()
    {
        $customers = User::count();
        $transactions = Transaction::count();
        $income = Transaction::sum('amount');
    
        // Example of data for Chart.js (can be customized based on your data)
        $salesData = Transaction::selectRaw('MONTH(created_at) as month, SUM(amount) as total')
                    ->groupBy('month')
                    ->pluck('total', 'month');
    
        return view('dashboard', compact('customers', 'transactions', 'income', 'salesData'));
    }
}