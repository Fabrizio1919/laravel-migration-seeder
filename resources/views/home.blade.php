@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @foreach($trains as $train)
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h6>Codice treno : 
                    {{ $train->codice_treno }}
                    </h6>
                    <h6><strong>Numero vagone :</strong>
                        {{ $train->n_vagoni }}</h4>
                        <p> <strong>Orario di partenza :</strong>
                            {{ $train->orario_partenza }}
                        </p>
                        <p> <strong>Orario di arrivo :</strong>
                            {{ $train->orario_arrivo }}
                        </p>
                </div>
            </div>
        </div>
        @endforeach



        @endsection