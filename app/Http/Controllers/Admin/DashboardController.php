<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalRevenue = Transaction::whereIn('status', ['settlement', 'success'])->sum('total_price');
        $ticketsSold = Transaction::whereIn('status', ['settlement', 'success'])->count();
        $activeEvents = Event::count();
        $pendingOrders = Transaction::where('status', 'pending')->count();
        
        $latestTransactions = Transaction::with('event')->latest()->limit(5)->get();

        return view('admin.dashboard', compact(
            'totalRevenue',
            'ticketsSold',
            'activeEvents',
            'pendingOrders',
            'latestTransactions'
        ));
    }
}