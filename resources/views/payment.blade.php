<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/payment.css')}}" />
    <link rel="stylesheet" href="{{url('css/main.css')}}" />
    <title>MB-TABLE</title>
</head>
<body>

    {{-- header --}}
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="/home" class="logo"><span>MB</span>-TABLE</a>

        <nav class="navbar">
            <a href="/home">Home</a>
            <a href="/aboutUs">About Us</a>
            <a href="#history">History</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="/profile"><i class="fas fa-user" id="profile-btn"></i></a>
        </div>

        <form action="/searchBilliard" method="POST" class="search-bar-container">
            @csrf
            <input type="search" id="search-bar" placeholder="search here..." name="search">
            <button style="background-color: transparent;"><label for="search-bar"><i class="fas fa-search" id="search-btn"></i></label></button>
        </form>
    </header>

    <h1 class="main-header">Order Confirmation</h1>

    {{-- body --}}
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                {{-- <img src = "{{asset('storage/img/billiard/mainPicture/'.$billiard->billiard->mainpic)}}" alt = "shoe image"> --}}
                <img src = "{{url('storage/img/payment.jpg')}}">
              </div>
            </div>
          </div>

          <!-- card right -->

          <div class = "product-content">
            <h2 class = "product-title">{{ $billiard->billiard->name }}</h2>

            <div class = "product-detail">
                <p>Date: <span>{{ now()->format('Y-m-d') }}</span></p>
                <p>Time: <span>{{ $billiard->time }}</span></p>
                <p>Table: <span>{{ $billiard->tablenumber }}</span></p>
            </div>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>{{ $billiard->billiard->priceperhour }} x {{ $billiard->totaltables }}</td>
                        <td>Rp. {{ $billiard->totalprice }}</td>
                    </tr>
                    <tr>
                        <td>Admin Fee</td>
                        <td></td>
                        <td>Rp. 15000</td>
                    </tr>
                    <tr>
                        <td>Total Price</td>
                        <td></td>
                        @php
                            $fixedPrice = $billiard->totalprice + 15000;
                        @endphp
                        <td>Rp. {{ $fixedPrice }}</td>
                    </tr>
                </table>
            </div>

            <form action="/checkout/{{ $billiard->billiard_id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="wrap">
                    <div class="select-menu">
                        <span>Payment Method : </span>
                        <select name="paymentmethod">
                            <option value="Virtual Account">Virtual Account</option>
                            <option value="DANA">DANA</option>
                            <option value="GOPAY">GOPAY</option>
                            <option value="OVO">OVO</option>
                            <option value="PayPal">PayPal</option>
                        </select>
                    </div>

                    <div class = "purchase-info">
                      <button type="submit" class="btn">Confirm Order</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>

    {{-- footer --}}

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>About Us</h3>
                <p>The first billiard table booking application in Indonesia for the Jabodetabek area. Easy, convenient, and fast, book your billiard table now!</p>
            </div>

            <div class="box">
                <h3>Branch locations</h3>
                <a href="#">Jakarta</a>
                <a href="#">Bogor</a>
                <a href="#">Depok</a>
                <a href="#">Tangerang</a>
                <a href="#">Bekasi</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#">Instagram</a>
                <a href="#">TikTok</a>
                <a href="#">WhatsApp</a>
            </div>
        </div>

        <h1 class="credit"> created by <span> MB-TABLE 2023 </span> | all rights reserved! </h1>
    </section>

    <script src="{{url('js/home.js')}}"></script>
    <script src="{{url('js/payment.js')}}"></script>
</body>
</html>
