@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-2">
            <h1>Travel App</h1>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>
                Benenuto nella tua nuova app di viaggio, qua potrai pianificare e gestire il tuo prossimo viaggio!
            </p>

            <a href="" class="btn btn-dark">
                Inizia qui
            </a>

            <h3 class="pt-3">Compila i seguenti campi:</h3>

            <div class="mb-3">
                <label for="" class="form-label">Meta del viaggio</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" />
                <small id="helpId" class="form-text text-muted">Inserisci una localitá</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Numero di giorni</label>
                <input type="" class="form-control" name="" id="" aria-describedby="helpId" />
                <small id="helpId" class="form-text text-muted">Inserisci il numero di giorni</small>
            </div>

            {{-- qua genero delle cards in base al numero di giorni di viaggio, 
            per ogni card cliccabile poi si potrá aggiungere all'interno i dettagli --}}

            {{-- oppure creare un bottone che genera un form che ti fá inserire i dettagli del viaggio --}}

        </div>
    </div>
@endsection
