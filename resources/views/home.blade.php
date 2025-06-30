@extends('layout')

@section('title', 'Home')

@section('main_content')
    <div>
        <h1>Home 1</h1>
        <p>Test</p>
    </div>
    @foreach($review as $el)
        <div class="my_card card mb-4 rounded-3 shadow-sm">
            <div class="event_top">
                <h3>{{ $el->betreff }}</h3>
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


    @endforeach

@endsection
