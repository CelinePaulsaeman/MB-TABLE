@extends('main')

@section('css')
    <link rel="stylesheet" href="{{url('css/history.css')}}" />
@stop

@section('content')
    <div class="card">
        <div class="image">
            <img src="img1.jpg" alt="">
        </div>
        <div class="text">
            <span class="date">20-12-2023</span>
            <h2>Nama BL</h2>
            <p>Table 3</p>
        </div>
        <div class="price">100</div>
        <div class="button">
            <p><button class="detail">View Detail</button></p>
        </div>
    </div>
@stop