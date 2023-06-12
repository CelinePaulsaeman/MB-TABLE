<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/home.css')}}" />
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

    {{-- body --}}
    <section class="pack" id="pack">
        <div class="box-container">
            @foreach ($billiards as $billiard)
                <div class="box">
                    <a href="{{url('billiardDetail/'.$billiard->id)}}">
                        <img src="{{asset('storage/img/billiard/mainPicture/'.$billiard->mainpic)}}" alt="">
                    </a>
                    <div class="content">
                        <a href="{{url('billiardDetail/'.$billiard->id)}}"><h3>{{ $billiard->name }}</h3></a>
                        <p><i class="fas fa-map-marker-alt"></i> {{ $billiard->address }}</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <span>{{ $billiard->rating }} ( {{ $billiard->totalrate }} )</span>
                        </div>
                        <div class="price">Rp. {{ $billiard->priceperhour }} / hour</div>
                        <a href="{{url('bookingBilliard/'.$billiard->id)}}" class="btn">book now</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-container">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="{{ $billiards -> previousPageUrl() }}">&laquo;</a>
                </li>
                @for ($i = 1; $i <= $billiards -> lastPage(); $i++)
                    @if ($i == $billiards -> currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="">{{ $i }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $billiards -> url($i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor
                <li class="page-item">
                    <a class="page-link" href="{{ $billiards -> nextPageUrl() }}">&raquo;</a>
                </li>
            </ul>
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





    <script src="{{url('js/home.js')}}"></script>

</body>
</html>
