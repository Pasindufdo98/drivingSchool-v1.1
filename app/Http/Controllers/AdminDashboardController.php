<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    
        public function index()
        {
            $userCountByMonth = User::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, count(*) as count')
                                    ->groupBy('month')
                                    ->get()
                                    ->pluck('count', 'month')
                                    ->toArray();
        
            return view('admin.dashboard', compact('userCountByMonth'));
        }
}