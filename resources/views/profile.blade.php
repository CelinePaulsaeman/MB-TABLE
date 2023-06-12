<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/profile.css')}}" />
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

    <h1 class="main-header">Edit Profile</h1>

    {{-- body --}}
    <div class = "card-wrapper">
          <!-- card left -->

          <!-- card right -->

          <div class = "product-content">
            <form action="/updateUser/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="sign-in-form">
                {{ csrf_field() }}
                <div class="upload">
                    <img src="{{asset('storage/img/'. Auth::user()->profilepic)}}" width = 100 height = 100 alt="">
                    <div class="round">
                      <input type="file" name="photo" id="photo">
                      <i class = "fa fa-camera" style = "color: #fff;"></i>
                  </div>
                </div>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" required name="username"/>
                </div>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" required name="email"/>
                </div>

                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" required name="password"/>
                </div>

                <div class="buttons">
                    <input type="submit" value="Update" class="btn solid" />
                    <a href="/signOut"><input value="Log Out" id="btnLogout" class="btn solid" style="text-align: center;"/></a>
                </div>
            </form>
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
</body>
</html>
