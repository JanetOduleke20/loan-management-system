<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Loan;

class LoanController extends Controller
{
    public function applyforloan(Request $request) {
        $loaninfo = new Loan;
        $loaninfo->firstname = $request->input('firstname');
        $loaninfo->lastname = $request->input('lastname');
        $loaninfo->email = $request->input('email');
        $loaninfo->amount = $request->input('amount');
        $loaninfo->purpose = $request->input('purpose');
        $loaninfo->birthdate = $request->input('birthdate');
        $loaninfo->street = $request->input('street');
        $loaninfo->city = $request->input('city');
        $loaninfo->region = $request->input('region');
        $loaninfo->country = $request->input('coutry');

        $loaninfo->save();
        return response()->json([
            'status' => 200,
            'message' => 'Sign up successful'
        ]);

    }
    public function check() {
        return view('http://localhost:3000/Admin');
    }
}
