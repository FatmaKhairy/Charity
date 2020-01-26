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
        return view('dashboard.donations',compact('donations'));//كل التببرعات
    }

    public function show(Donation $donation)
    {

    }

    public function edit(Donation $donation)
    {
        //
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
