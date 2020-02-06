<?php

namespace App\Http\Controllers\dashboard;

use App\Donation;
use App\Governorate;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{

    public function index(Request $request)
    {
				$donations= Donation::latest()->paginate(5);
				$govs=Governorate::with('cities')->get();
				$user=auth()->user();
        return view('dashboard.donations',compact('govs','donations','user'));//كل التببرعات
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('dashboard.donations');
    }
}
