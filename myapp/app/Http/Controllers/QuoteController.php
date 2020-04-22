<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
       $quotes = Quote::latest()->get();
       return view('quotes.index',[
            'quotes' => $quotes 
       ]);
    }


}

