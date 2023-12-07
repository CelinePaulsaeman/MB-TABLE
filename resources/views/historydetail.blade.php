@extends('main')

@section('css')
    <link rel="stylesheet" href="{{url('css/historydetail.css')}}" />
@stop

@section('content')
<div class="container">
    <div class="image">
        <img src="{{ asset('./storage/Four-ball_carom.jpg') }}" alt="">
    </div>
    
    <div class="text">
        <p>Order ID : XXXXXX</p>
        <p>20-12-2023</p>
        <h2>Afterhour</h2>
        <p>Table 3</p>
        <p><i class="fas fa-map-marker-alt"></i> Pasar Pantai Indah Kapuk, Kav. K 2, Unit FD, Jl. Pantai Indah Utara 2, RW.7, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14460</p>
    </div>
    
</div>


<div class="container-bill">
    <h2>Order Details</h2>
        <table>
            <tr class="service">
                <td class="tableitem"><p class="itemtext">Booking</p></td>
                <td class="tableitem2"><p class="itemtext">Rp 80.000</p></td>
            </tr>
            <tr class="service">
                <td class="tableitem"><p class="itemtext">Tax</p></td>
                <td class="tableitem2"><p class="itemtext">Rp 8.000</p></td>
            </tr>
            <tr class="service">
                <td class="tableitem"><h1 class="itemtext">Total</h1></td>
                <td class="tableitem2"><h1 class="itemtext">Rp 88.000</h1></td>
            </tr>
        </table>    
</div>

@stop
