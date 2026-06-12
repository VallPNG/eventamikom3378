<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Menampilkan daftar transaksi.
     */
    public function index()
    {
        return view('admin.transactions.index'); 
    }
}

// 3378 VALEDHIKA