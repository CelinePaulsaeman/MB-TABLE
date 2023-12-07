@extends('main')

@section('css')
    <link rel="stylesheet" href="{{url('css/history.css')}}" />
@stop

@section('content')
    <div class="card">
        <div class="image">
            <img src="{{url('storage/img/hexa.jpg')}}" alt="">
        </div>
        <div class="text">
            <span class="date">20-12-2023</span>
            <h2>Nama BL</h2>
            <p>Table 3</p>
        </div>

        <div class="right">
            <div class="price">Rp. 100.000,00</div>
            <a class="detail" href="/historydetail">View Detail</a>
        </div>
    </div>
@stop
