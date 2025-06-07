<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller

{
    public function index()
    {
        $faqList = Faq::all(); // Ambil semua data FAQ dari database
        return view('jelajah_laut', compact('faqList')); // Kirim ke view
    }
}
