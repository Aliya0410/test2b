<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index(){
        $offers = Offers::all();
        $offers = Offers::orderBy('created_at', 'desc')->get();
        return view('index', compact('offers'));
    }

    public function store(Request $request){
        $request->validate([
            'text' => 'required|string'
        ]);

        $request->validate([
            'name' => 'required|string'
        ]);

        $offer = new Offers();
        $offer->text = $request->text;
        $offer->name = $request->name;
        $offer->save();
        

        return redirect()->route('index');
    }

    public function acceptOffers(){
        $offers = Offers::where('status', 'Принят')->orderBy('created_at', 'asc')->get();
        return view('accept_offers', compact('offers'));
    }
}
