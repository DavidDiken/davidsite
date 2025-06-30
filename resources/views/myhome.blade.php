@extends('layout')

@section('title', 'Haus')

@section('main_content')
    <div>
        <h1>My Home</h1>


        <form action="myhome" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-4">
                    <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Vorname">
                </div>
                <div class="mb-3 col-4">
                    <input type="text" class="form-control" id="nachname" name="nachname" placeholder="Nachname">
                </div>
                <div class="mb-3 col-4">
                    <input type="text" class="form-control" id="betreff" name="betreff" placeholder="Betreff">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea class="form-control" id="nachricht" name="nachricht" placeholder="Nachricht" style="min-height: 200px"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="mb-3 col-2">
                    <label for="event_date" class="form-label">Datum ab</label>
                    <input type="datetime-local" class="form-control" id="datum_ab" name="datum_ab" placeholder="Datum ab">
                </div>
                <div class="mb-3 col-2">
                    <label for="event_date" class="form-label">Datum bis</label>
                    <input type="datetime-local" class="form-control" id="datum_bis" name="datum_bis" placeholder="Datum bis">
                </div>
            </div>
            <div class="row">
                <button class="mb-3 col-2 btn btn-success">Speichern</button>
            </div>
        </form>

        @if($errors->any())
            <div class="alert-alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection
