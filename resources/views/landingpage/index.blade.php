<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Sepatu Tangguh | laravel </title>
</head>

<body>
    <header class="header">
        <div class="nav">
            <a href="index.html" class="logo">Sepatu Tangguh</a>
            <nav>
                <ul>
                <li><a href="{{ url('/') }}">home</a></li>
                    <li><a href="{{ url('/') }}">new arrival</a></li>
                    <li><a href="{{ url('/') }}">best collection</a></li>
                    <li><a href="{{ url('/') }}">about</a></li>
                </ul>
                <div class="nav-icon">
                    <span><i class="fa-solid fa-heart"></i></span>
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                </div>
            </nav>
            <i class="fa-solid fa-bars burger_icon"></i>
        </div>
    </header>
    <!-- hero -section -->
    <main class="container hero">
        <div class="clr-one"></div>
        <div class="clr-two"></div>
        <div class="wrapper">
            <div class="col col-text" data-aos="fade-right">
                <h1 class="heading-one">best in style <br> collection <br> <span>for you</span></h1>
                <p class="sub-text">We Craft The, We Want To Say The Best, <br>
                    But Through 70 Years Of Experience In The Industry</p>
                <button class="btn btn-hero">pre-order now</button>
            </div>
            <div class="col col-img">
                <figure data-aos="fade-left">
                <img src="{{ asset('assets/hero/hero.png') }}" alt="nike-shoe">
                </figure>
                <div class="hero-img-off" data-aos="zoom-in-up">
                    <h3 class="heading-three">get up to 50% OFF</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est inventore </p>
                </div>
            </div>
        </div>
    </main>
    <!-- arrival section-->
    <section class="container arrival">
        <div class="section-heading">
            <div class="heading">
                <h2 class="heading-two">new <span>arrival</span> </h2>
                <p class="sub-heading">our new collection</p>
            </div>
            <button class="btn">see all</button>
        </div>

        <div class="wrapper">
            @foreach($tables as $row)
            <div class="col" data-aos="zoom-in-up">
                <figure>
                <img src="storage/{{$row->image}}" alt="nike-shoe">
                </figure>
                <div class="col-body">
                    <p class="rating-icon"><i class="fa-solid fa-star"></i> <span class="rating-num">{{$row->rating}}</span></p>
                    <h3 class="heading-three">{{$row->name}}</h3>
                    <p class="sub-heading">{{$row->description}}</p>
                    <div class="col-footer">
                        <p class="shoe-price">{{$row->prince}}</p>
                        <button class="shoe-btn btn">buy now</button>
                    </div>
                </div>

            </div>
            @endforeach


            

            
        </div>
    </section>
    <!-- ====================  About Us SEction ================== -->
    <section class="about container">
        <div class="clr-one"></div>
        <div class="clr-two"></div>
        <div class="wrapper">
            <div class="col-img col" >
                <div class="get-off" data-aos="zoom-in">
                    <h4>get up to 50% OFF</h4>
                    <p class="off-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <figure data-aos="fade-left">
                <img src="{{ asset('assets/about/about-img.png') }}" alt="about-img">
                </figure>
            </div>
            <div class="col-text col" data-aos="fade-right">
                <p class="sub-heading">about us</p>
                <h2 class="heading-two"> we provide high <br> quality <span> shoes</span></h2>
                <p class="about-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum commodi nostrum similique corrupti
                    doloremque alias aliquam assumenda impedit, sequi optio!
                </p>
                <button class="btn">read more</button>
            </div>
        </div>
    </section>
    <!-- new collection -->
    <section class="container collection">
        <!-- section header -->
        <div class="section-heading">
            <div class="heading">
                <p class="sub-heading">best collection</p>
                <h2 class="heading-two">our new collection</h2>
            </div>
            <div class="btn-section">
                <button class="btn-col btn" data-btn="all">all</button>
                <button class="btn-col" data-btn="men">men</button>
                <button class="btn-col" data-btn="women">women</button>
                <button class="btn-col" data-btn="sports">sports</button>
            </div>
        </div>
        <!-- section wrapper and col -->
        <div class="grid-wrapper">
        @foreach($men as $row)
            <div class="col- collection-item" data-item="men" data-aos="zoom-in-up">
                <figure><img src="storage/{{$row->image}}" alt="about-img"></figure>
                <div class="col-body">
                    <p class="rating-icon"><i class="fa-solid fa-star"></i> <span class="rating-num">{{$row->rating}}</span></p>
                    <h3 class="heading-three">{{$row->name}}</h3>
                    <p class="sub-heading">{{$row->description}}</p>
                    <div class="col-footer">
                        <p class="shoe-price">{{$row->prince}}</p>
                        <button class="shoe-btn btn">buy now</button>
                    </div>
                    
                </div>
            </div>
           @endforeach
           @foreach($woman as $row)
            <div class="col- collection-item" data-item="women" data-aos="zoom-in-up">
            <figure><img src="storage/{{$row->image}}" alt="about-img"></figure>
                <div class="col-body">
                    <p class="rating-icon"><i class="fa-solid fa-star"></i> <span class="rating-num">{{$row->rating}}</span></p>
                    <h3 class="heading-three">{{$row->name}}</h3>
                    <p class="sub-heading">{{$row->description}}</p>
                    <div class="col-footer">
                        <p class="shoe-price">{{$row->prince}}</p>
                        <button class="shoe-btn btn">buy now</button>
                    </div>
                </div>
            </div>
            @endforeach
           
            @foreach($sport as $row)
            <div class="col- collection-item" data-item="sports" data-aos="zoom-in-up">
            <figure><img src="storage/{{$row->image}}" alt="about-img"></figure>
                <div class="col-body">
                    <p class="rating-icon"><i class="fa-solid fa-star"></i> <span class="rating-num">{{$row->rating}}</span></p>
                    <h3 class="heading-three">{{$row->name}}</h3>
                    <p class="sub-heading">{{$row->description}}</p>
                    <div class="col-footer">
                        <p class="shoe-price">{{$row->prince}}</p>
                        <button class="shoe-btn btn">buy now</button>
                    </div>
                </div>
            </div>
            @endforeach
           

            
        </div>
    </section>
    <!-- customer review -->
    <section class="container testimonial">
        <div class="clr-one"></div>
        <div class="section-heading">
            <div class="heading">
                <p class="sub-heading">testimonial</p>
                <h2 class="heading-two">what our customer says</h2>
            </div>
        </div>
        
        <div class="wrapper">
        @foreach($comment as $comment)
        <div class="col" data-aos="zoom-in-up">
            <figure>
                <img src="storage/{{$comment->image}}" alt= "about-img">
            </figure>
            <h3 class="heading-three">{{ $comment->name }}</h3>
            <p class="testi-message">{{ $comment->description }}</p>
            <span class="ratting">
                @for ($i = 0; $i < $comment->rating; $i++)
                    <i class="fa-solid fa-star"></i>
                @endfor
            </span>
        </div>
        @endforeach
            </div>

            
        </div>
    </section>
    <!-- subscribe for news latest updates section -->
    <section class="container subscribe">
        <div class="wrapper">
            <h2 class="heading-two">Tangguh Anti Kayuuu</h2>
            <form>
                <input type="email" class="email" placeholder="ex@gmail.com" >
                <button class="btn">subscribe</button>
            </form>
        </div>
    </section>
    <!-- webstie footer -->
    <footer class="container">
        <div class="wrapper">
            <div class="col" data-aos="zoom-in">
                <a href="index.html" class="logo">Anti Coklat</a>
                <p class="about-website">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Voluptatibus <br> earum sequi ducimus</p>
            </div>
            <div class="col" data-aos="zoom-in">
                <h4>quick links</h4>
                <a href="index.html">home</a>
                <a href="">about</a>
                <a href="">new arrival</a>
                <a href="">best collection</a>
            </div>
            <div class="col" data-aos="zoom-in">
                <h4>contact us</h4>
                <p>Tangguhchandra59@gmail.com</p>
                <p>311-220-000-1</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>