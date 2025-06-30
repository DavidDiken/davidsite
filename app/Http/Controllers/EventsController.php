<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;


class EventsController extends Controller
{
    Public function myhome_check(Request $request) {
        $valid = $request->validate([
            'vorname' => 'required',
            'nachname' => 'required',
            'betreff' => 'required',
            'datum_ab' => 'required|date|after_or_equal:today',
            'datum_bis' => 'required|date|after_or_equal:datum_ab',
        ]);

        $review = new Events();
        $review->vorname = $request->input('vorname');
        $review->nachname = $request->input('nachname');
        $review->betreff = $request->input('betreff');
        $review->nachricht = $request->input('nachricht');
        $review->datum_ab = $request->input('datum_ab');
        $review->datum_bis = $request->input('datum_bis');

        $review->save();

        return redirect('/myhome');
    }

}
