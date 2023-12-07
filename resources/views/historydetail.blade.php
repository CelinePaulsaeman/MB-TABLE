@extends('main')

@section('css')
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/payment.css')}}" />
@stop

@section('content')
<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "{{url('storage/img/hexa.jpg')}}">
          </div>
        </div>
      </div>

      <!-- card right -->

      <div class = "product-content">
        <h2 class = "product-title">Q Billiard</h2>

        <div class = "product-detail">
            <p>Date: <span>23/09/2023</span></p>
            <p>Time: <span>12:00</span></p>
            <p>Table: <span>01</span></p>
        </div>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>85000 x 1</td>
                    <td>Rp. 85000</td>
                </tr>
                <tr>
                    <td>Admin Fee</td>
                    <td></td>
                    <td>Rp. 15000</td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td></td>
                    <td>Rp. 100000</td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>
@stop
