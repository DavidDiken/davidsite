@extends('layout')

@section('title', 'Archiv')

@section('main_content')

    <div>
        <h1>Archiv</h1>
        <p>Test</p>
    </div>
    @foreach($review as $el)
        @php
            $daysLeft = floor(\Carbon\Carbon::today()->diffInDays(\Carbon\Carbon::parse($el->datum_bis), false));
        @endphp
        @if($daysLeft < 0)

            <div class="my_card card mb-4 rounded-3 shadow-sm">
                <div class="event_top">
                    <div class="">
                        <h3>{{ $el->betreff }}</h3>
                    </div>
                    <p>bis: <span>{{ $el->datum_bis }}</span></p>
                </div>
                <div class="event_mittle">
                    <p>{{ $el->nachricht }}</p>
                </div>
                <div class="event_bottom">
                    <p>Von Fam. {{ $el->nachname }}</p>
                    <p>ab {{ $el->datum_ab }}</p>
                    <p>{{ $el->vorname }}</p>
                </div>
            </div>

        @endif

    @endforeach

@endsection
