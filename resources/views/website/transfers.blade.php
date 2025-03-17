@extends('layouts.website')

@section('content')

<div class="container" style="margin-top: 150px; margin-bottom: 50px;">
    <h1 style="color: #555555; text-align: center;">Transfers e Tours</h1>
</div>

<section style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            @foreach ($transfer_tours as $transfer_tour)
            <div class="col-md-4">
                <div class="card" style="background-size: 100%;background-repeat: no-repeat;border: solid 1px #ccc;margin: 10px;">
                    <img src="{{ $transfer_tour->photo ? $transfer_tour->photo[0]->getUrl() : 'https://placehold.co/600x400' }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $transfer_tour->name }}</h5>
                        @if ($transfer_tour->under_consultation == true)
                            <h5 style="margin-bottom: 20px;">Preço sob consulta</h5>
                        @else
                            <h3>{{ $transfer_tour->price }}<small>€</small></h3>
                        @endif
                        <a href="/transfers/transfer/{{ $transfer_tour->id }}/{{ Str::slug($transfer_tour->name) }}" class="btn btn-main">Saber mais</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection