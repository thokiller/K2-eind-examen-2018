<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class QualificationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required'
        ]);

        Auth::user()->update([
            'test_moment' => $request->date . ' ' . $request->time
        ]);

        flash('Rijvaardigheid check is ingepland!');

        return redirect('/objecten');
    }

    public function qualifications()
    {
        $users = User::where('test_moment', '<>', ' ' )->where('qualified', '0')->get();

        return view('qualifications', compact('users'));
    }

    public function qualify($id)
    {
        User::findOrFail($id)->update([
            'qualified' => 1
        ]);

        flash('Klant is gekwalificeerd!');

        return redirect('/admin/qualifications');
    }
}
