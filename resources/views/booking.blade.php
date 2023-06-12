<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/booking.css')}}" />
    <link rel="stylesheet" href="{{url('css/main.css')}}" />
    <script src="{{url('js/booking.js')}}"></script>
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

    {{-- body --}}
    <section class="book">
        <div class="desc">
            <h1>{{ $billiard->name }}</h1>
        </div>
        <hr class="one">

        <div class="box-container">
            <div id="1" class="box" onclick="clickTable(this)">01</div>
            <div id="2" class="box" onclick="clickTable(this)">02</div>
            <div id="3" class="box" onclick="clickTable(this)">03</div>
            <div id="4" class="box" onclick="clickTable(this)">04</div>

            <div class="right">
                <div id="9" class="box" onclick="clickTable(this)">09</div>
                <div id="10" class="box" onclick="clickTable(this)">10</div>
                <div id="11" class="box" onclick="clickTable(this)">11</div>
                <div id="12" class="box" onclick="clickTable(this)">12</div>
            </div>
        </div>

        <div class="box-container">
            <div id="5" class="box" onclick="clickTable(this)">05</div>
            <div id="6" class="box" onclick="clickTable(this)">06</div>
            <div id="7" class="box" onclick="clickTable(this)">07</div>
            <div id="8" class="box" onclick="clickTable(this)">08</div>

            <div class="right">
                <div id="13" class="box" onclick="clickTable(this)">13</div>
                <div id="14" class="box" onclick="clickTable(this)">14</div>
                <div id="15" class="box" onclick="clickTable(this)">15</div>
                <div id="16" class="box" onclick="clickTable(this)">16</div>
            </div>
        </div>

        <hr>
        <div class="payment">
            @php
                $blPriceHour = 0;
            @endphp
            <form action="/addToCart/{{ $billiard->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="desc">
                    <p>Date: {{ now()->format('Y-m-d') }}</p>
                    <p>Time: <input class="input-time" type="time" required name="time"/></p>
                </div>
                <p id="totalprice">Total: Rp. {{ $blPriceHour }}</p>
                <input type="hidden" value="0" id="ttlprice" name="totalprice"/>
                <input type="hidden" value="0" id="ttltable" name="totaltable"/>
                <input type="hidden" value=" " id="tblnumber" name="tablenumber"/>
                <input type="submit" value="Checkout" class="btn"/>
            </form>
        </div>
    </section>

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
    <script>
        var pertama = false;
        function clickTable(element) {
            let totalprice = document.getElementById("totalprice");
            let ttlprice = document.getElementById("ttlprice");
            let ttltable = document.getElementById("ttltable");
            let tblnumber = document.getElementById("tblnumber");
            var a = parseInt(ttlprice.value);
            var b = parseInt(ttltable.value);
            if(element.style.backgroundColor == "green"){
                element.style.backgroundColor = "#5084e4";
                var idYangDihapus = element.id + " ";
                var idBaru = tblnumber.value.replace(idYangDihapus , "");
                a -= {{$billiard->priceperhour}};
                b -= 1;
                ttlprice.value =  a;
                ttltable.value =  b;
                tblnumber.value =  idBaru;
                totalprice.innerHTML = "Total: Rp. " + ttlprice.value;
            }else{
                element.style.backgroundColor = "green";
                var idTable = element.id;
                a += {{$billiard->priceperhour}};
                b += 1;
                ttlprice.value =  a;
                ttltable.value =  b;
                tblnumber.value += idTable + " ";
                totalprice.innerHTML = "Total: Rp. " + ttlprice.value;
            }
        }
    </script>
    <script src="{{url('js/home.js')}}"></script>
</body>
</html>
