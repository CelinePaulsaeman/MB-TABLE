<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/detail.css')}}" />
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
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "{{asset('storage/img/billiard/mainPicture/'.$billiard->mainpic)}}" alt = "shoe image">
                <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic2)}}" alt = "shoe image">
                <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic3)}}" alt = "shoe image">
                <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic4)}}" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
                <div class = "img-item">
                    <a href = "#" data-id = "1">
                        <img src = "{{asset('storage/img/billiard/mainPicture/'.$billiard->mainpic)}}" alt = "shoe image">
                    </a>
                  </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                    <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic2)}}" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                    <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic3)}}" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                    <img src = "{{asset('storage/img/billiard/otherPicture/'.$billiard->pic4)}}" alt = "shoe image">
                </a>
              </div>

            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">{{ $billiard->name }}</h2>
            <div class = "product-rating">
              <i class = "fas fa-star"></i>
              <span>{{ $billiard->rating }} ( {{ $billiard->totalrate }} )</span>
            </div>

            <div class = "product-price">
              <p class = "new-price">Price / hour : <span>Rp. {{ $billiard->priceperhour }}</span></p>
            </div>

            <div class = "product-detail">
              <h2>about us </h2>
              <p>{{ $billiard->description }}</p>
              <ul>
                <li>Address : <span>{{ $billiard->address }}</span></li>
                <li>Open At : <span>{{ $billiard->openat }}</span></li>
                <li>Telephone : <span>{{ $billiard->telephone }}</span></li>
                <li>WhatsApp : <span>{{ $billiard->whatsapp }}</span></li>
                <li>Instagram : <span>{{ $billiard->insta }}</span></li>
              </ul>
            </div>

            <div class = "purchase-info">
              <a href="{{url('bookingBilliard/'.$billiard->id)}}"><button type = "button" class = "btn">Book Now</button></a>
            </div>

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

    <script src="{{url('js/detail.js')}}"></script>
    <script src="{{url('js/home.js')}}"></script>
</body>
</html>
