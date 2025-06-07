<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create() {
        return view('jelajah_laut');
    }

    public function store(Request $request) {
        Feedback::create($request->all());
        return redirect('/jelajah_laut')->with('success', 'Data berhasil disimpan!');
    }
}
