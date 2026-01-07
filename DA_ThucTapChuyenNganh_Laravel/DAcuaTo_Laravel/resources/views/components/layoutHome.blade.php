<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <base href="{{asset('public/')}}">
    <title>Do An cua To</title>
    <!-- Purple favicon (inline SVG) -->
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%236a0dad'/%3E%3Ctext x='50' y='60' font-size='48' text-anchor='middle' fill='%23ffffff' font-family='Arial,Helvetica,sans-serif'%3E%3C/tspan%3E%3C/text%3E%3C/svg%3E">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    /* Dark page helper for auth/account pages */
    .dark-page{background:#000;color:#fff;padding:60px 0;min-height:60vh}
    .dark-page .card{background:#0f1720;border-color:#1f2937;color:#fff}
    .dark-page .card-header{background:transparent;color:#fff;border-bottom:1px solid rgba(255,255,255,0.04)}
    .dark-page .card-body{background:transparent}
    .dark-page .form-control{background:#111;color:#fff;border:1px solid #222}
    .dark-page .form-check-label{color:#ddd}
    .dark-page .btn-primary{background:#2563eb;border-color:#2563eb;color:#fff}
    .dark-page .alert{background:#2563eb;color:#fff;border:0}
    </style>

</head>

<body style="background: url('img/breadcrumb-bg.jpg') center top / cover no-repeat fixed; color: #fff;">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('index')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option" style="margin-top: 15px;">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="{{route('index')}}" class="nav-item nav-link active">Home</a></li>
                                <li><a href="{{route('about')}}" class="nav-item nav-link">About</a></li>
                                <li><a href="{{route('portfolio')}}" class="nav-item nav-link">Video</a></li>
                                <li><a href="{{route('category.index')}}" class="nav-item nav-link">Categories</a>
                                    <ul class="dropdown">
                                        @php
                                            $categories = \App\Models\Category::where('status', 1)->get();
                                        @endphp
                                        @forelse($categories as $cat)
                                            <li><a href="{{route('category.show', $cat->id)}}" class="nav-item nav-link">{{ $cat->name }}</a></li>
                                        @empty
                                            <li><a href="#" class="nav-item nav-link" style="color: #999;">No categories</a></li>
                                        @endforelse
                                    </ul>
                                </li>
                                    <li><a href="{{route('services')}}">Services</a>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{route('contact')}}" class="nav-item nav-link">Contact</a></li>
                                   <li class="nav-item dropdown">
                                       <a class="nav-link" href="{{ route('account.info') }}" id="accountDropdown" style="cursor:pointer;">
                                           Account
                                       </a>
                                       <div class="dropdown-menu account-menu" aria-labelledby="accountDropdown" style="display:none; position:absolute; left:0; top:100%; min-width:160px;">
                                           @guest
                                               <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                           @else
                                               <a class="dropdown-item" href="{{ route('account.info') }}">Information</a>
                                               <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                                   @csrf
                                                   <button class="dropdown-item" type="submit">Logout  <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                                               </form>
                                           @endguest
                                       </div>
                                   </li>
                            </ul>
                        </nav>
                        <!-- Search form placed before social icons -->
                        <div class="header__search" style="display:inline-block; margin-right:12px; vertical-align:middle; margin-top:12px;">
                            <form action="{{ route('products.search') }}" method="GET" class="d-flex" style="align-items:center;">
                                <style>
                                    .header__search .search-field,
                                    .header__search .search-cat,
                                    .header__search .search-btn {
                                        box-sizing: border-box;
                                        vertical-align: middle;
                                    }
                                    .header__search .search-field,
                                    .header__search .search-cat {
                                        padding: 6px 10px;
                                        height: 40px;
                                        border: 1px solid #ccc;
                                    }
                                        .header__search .search-field { border-radius: 20px; }
                                        .header__search .search-cat { border-radius: 0 20px 20px 0; border-left: 0; margin-left: -1px; }
                                    .header__search .search-btn {
                                        display: inline-flex;
                                        align-items: center;
                                        justify-content: center;
                                        height: 40px;
                                        padding: 0 12px;
                                        margin-left: 8px;
                                        border-radius: 6px;
                                        border: none;
                                        background: #6a0dad;
                                        color: #fff;
                                        cursor: pointer;
                                    }
                                    @media (max-width: 768px) {
                                        .header__search .search-field, .header__search .search-cat { height: 34px; }
                                        .header__search .search-btn { height: 34px; }
                                    }
                                </style>
                                <input class="search-field" type="text" name="q" placeholder="Tìm sản phẩm..." value="{{ request('q') }}" />
                                {{-- Category selector removed to keep only product search field --}}
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="header__nav__social">
                                                    <style>
                                                    .nav-item.dropdown:hover .account-menu {
                                                        display: block !important;
                                                    }
                                                    .nav-item.dropdown .account-menu {
                                                        transition: all 0.2s;
                                                        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
                                                        background: #fff;
                                                        border-radius: 10px;
                                                        padding: 0.5rem 0;
                                                        z-index: 1000;
                                                    }
                                                    .nav-item.dropdown .dropdown-item {
                                                        color: #333;
                                                        padding: 8px 20px;
                                                        text-decoration: none;
                                                    }
                                                    .nav-item.dropdown .dropdown-item:hover {
                                                        background: #f0f0f0;
                                                    }
                                                    </style>
                            <a href="{{ route('wishlist') }}"><i class="fa-solid fa-heart"></i></a>
                            <a href="{{ route('cart') }}"><i class="fa-brands fa-shopify"></i></a>
                            <a href="{{ route('orders') }}"><i class="fa-brands fa-stripe-s"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
   @yield('body')
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="https://www.facebook.com/youtube"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/playlist?list=PL8AE96C860FFD4395"><i class="fa fa-twitter"></i></a>
                            <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                            <a href="https://www.instagram.com/youtube/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Tại VideoViewer’s TÔ HÂN, chúng tôi tin rằng giữa hàng tỷ video trên YouTube, mỗi người dùng xứng đáng tìm thấy những nội dung thực sự yêu thích và có giá trị. Chúng tôi không chỉ là một nền tảng xem video, mà còn là Trung Tâm Giải Pháp Chuyên Môn tiên phong kết hợp giữa công nghệ gợi ý thông minh và dịch vụ tư vấn cá nhân hóa.</p>
                            <a href="{{route('about')}}" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="{{ route('index') }}#team">Team</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="{{route('portfolio')}}">Video</a></li>
                                <li><a href="{{ route('category.index') }}">Categories</a></li>
                                 <li><a href="{{route('services')}}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>VideoViewer's Tô Hân</h5>
                            <p>"Từ vô vàn video đến những nội dung thực sự đáng xem: Chúng tôi là chuyên gia định hướng gu xem của bạn."</p>
                            @if(session('status'))
                                <div style="margin-bottom:10px;background:#007bff;color:#fff;padding:10px 14px;border-radius:6px;box-shadow:0 1px 3px rgba(0,0,0,0.12);">{{ session('status') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger" style="margin-bottom:10px">{{ session('error') }}</div>
                            @endif
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__website">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__website__text">Website Đồ Án Thực Tập Chuyên Ngành
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            của Tô Hân | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://www.facebook.com/han.to.581?locale=vi_VN" target="_blank">Tô Nguyễn Gia Hân</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
    <style>@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}</style>

    <script>
    (function(){
        var overlay = document.getElementById('page-loading-overlay');
        var preloader = document.getElementById('preloder');
        if(!overlay) return;

        function isInternalLink(a){
            if(!a || !a.getAttribute) return false;
            var href = a.getAttribute('href') || '';
            if(!href) return false;
            if(href.indexOf('#')===0) return false;
            if(href.indexOf('javascript:')===0) return false;
            if(a.target && a.target === '_blank') return false;
            try{
                var url = new URL(href, location.href);
                return url.hostname === location.hostname;
            }catch(e){ return false; }
        }

        document.addEventListener('click', function(e){
            var a = e.target.closest('a');
            if(!a) return;
            if(!isInternalLink(a)) return;

            // hide the initial preloader (if any) and show our black overlay
            if(preloader) preloader.style.display = 'none';
            overlay.style.display = 'flex';

            // allow open-in-new-tab behaviors
            if(e.ctrlKey || e.metaKey || e.shiftKey || e.button === 1){
                setTimeout(function(){ overlay.style.display='none'; }, 500);
                return;
            }
            e.preventDefault();
            setTimeout(function(){ window.location.href = a.href; }, 50);
        }, true);
    })();
    </script>
</body>

</html>