<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class MainController extends Controller
{
    public function home()
    {
        // Загружаем все события из базы
        $review = Events::all();

        // Возвращаем представление и передаём данные
        return view('home', compact('review'));
    }

    public function archiv()
    {
        // Загружаем все события из базы
        $review = Events::all();

        // Возвращаем представление и передаём данные
        return view('archiv', compact('review'));
    }

    public function myhome()
    {
        return view('myhome');
    }

    public function myhome_check(Request $request)
    {
        // Валидация входных данных
        $validated = $request->validate([
            'vorname' => 'required',
            'nachname' => 'required',
            'betreff' => 'required',
            'nachricht' => 'required',
            'datum_ab' => 'required|date|after_or_equal:today',
            'datum_bis' => 'required|date|after_or_equal:datum_ab',
        ]);

        // Создание записи
        $event = new Events();
        $event->vorname = $request->input('vorname');
        $event->nachname = $request->input('nachname');
        $event->betreff = $request->input('betreff');
        $event->nachricht = $request->input('nachricht');
        $event->datum_ab = $request->input('datum_ab');
        $event->datum_bis = $request->input('datum_bis');
        $event->save();

        // Возвращаем назад
        return redirect('/myhome');
    }
}
