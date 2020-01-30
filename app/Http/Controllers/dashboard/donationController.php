<?php

namespace App\Http\Controllers\dashboard;

use App\Donation;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donationController extends Controller
{

    public function index()
    {
				$donations= Donation::all();
				$user=auth()->user();
        return view('dashboard.donations',compact('donations','user'));//كل التببرعات
    }


    public function edit(Donation $donation)
    {
        return 'تعديل التبرع'.$donation->id;
    }

    public function update(Request $request, Donation $donation)
    {
        //
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('dashboard.donations.index');
    }
}
