@extends('layouts.frontend.master')

@section('title', 'Home')

@section('event')
<div class="col-sm-4 mb-3">
    <div class="banner">
        <div class="evnt-date">
            20/09/2018
        </div>
        <img src="{{asset('images/event-2.jpeg')}}" alt="event">
        <div class="evnt-caption">
            Penampilan Drumpband TK ISLAM TERPADU NURUSSYIFA
        </div>
    </div>
</div>
<div class="col-sm-4 mb-3">
    <div class="banner">
        <div class="evnt-date">
            20/09/2018
        </div>
        <img src="{{asset('images/event-6.jpeg')}}" alt="event">
        <div class="evnt-caption">
            Lomba Nasyid
        </div>
    </div>
</div>
<div class="col-sm-4 mb-3">
    <div class="banner">
        <div class="evnt-date">
            20/09/2018
        </div>
        <img src="{{asset('images/event-1.jpeg')}}" alt="event">
        <div class="evnt-caption">
            Sholat Berjamaah
        </div>
    </div>
</div>
@endsection

@section('main')
<div class="row">
    @php
    for($i = 1; $i<=3; $i++) : @endphp <div class="col-sm-4 mb-2">
        <div class="card rounded-0">
            <img src="{{ asset('images/event-6.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body article">
                <h5 class="card-title">Lomba Nasyid Tk Nurusyifa</h5>
                <span class="date-published"><i class="fa fa-calendar"></i>&nbsp;20 januari 2019</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary rounded-0 float-right">Baca</a>
            </div>
        </div>
</div>
@php
endfor;
@endphp
</div>
@endsection