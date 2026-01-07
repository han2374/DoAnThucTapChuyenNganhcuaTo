 <x:layoutHome>
@section('body')
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Web Bán Và Tư Vấn Video Yêu Thích Trên Youtube</span>
                                <h2>Videoviewer’s Tô Hân</h2>
                                <a href="{{route('about')}}" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Web For Selling Favorite Videos On Youtube</span>
                                <h2>Videoviewer's To Han</h2>
                                <a href="{{route('about')}}" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Web For Consulting Favorite Videos On Youtube</span>
                                <h2>Videoviewer's To Han</h2>
                                <a href="{{route('about')}}" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Đôi chút về Web VideoViewer’s Tô Hân</span>
                            <h2>What Web do?</h2>
                        </div>
                        <p>VIDEOVIEWER’S TÔ HÂN là nền tảng kết hợp giữa thương mại điện tử và hệ thống tư vấn chuyên sâu, giúp bạn khám phá, mua các gói dịch vụ và khóa học liên quan đến nội dung video chất lượng trên YouTube.</p>
                        <a href="{{route('services')}}" class="primary-btn">View all services</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>Bán hàng (E-commerce)</h4>
                                <p>Đây là khu vực cung cấp các sản phẩm và dịch vụ có giá trị, giúp người dùng rút ngắn thời gian học hỏi và tiếp cận các công cụ chuyên nghiệp.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-2.png" alt="">
                                </div>
                                <h4>Tư vấn Định hướng Video</h4>
                                <p>Dịch vụ này dành cho những người đang lạc lối giữa vô số nội dung và cần một lộ trình xem cụ thể hoặc lời khuyên chuyên môn.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>Gợi ý Video Cá nhân hóa</h4>
                                <p>Áp dụng công nghệ để đảm bảo bạn luôn tìm thấy những video mình yêu thích mà không cần tốn công tìm kiếm.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>Lưu trữ và Quản lý Nội dung Yêu thích</h4>
                                <p>Cung cấp công cụ quản lý nội dung linh hoạt và tiện lợi hơn so với tính năng mặc định của YouTube.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
                <a href="https://www.youtube.com/watch?v=rnS_hdvRJ8k" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Công Nghệ Thông Tin - STU</h4>
                    <ul>
                        <li>Học Tập</li>
                        <li>Trường Đại Học</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
                <a href="https://www.youtube.com/watch?v=mE5ZX6RjF1s" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Đừng Về Trễ - Sơn Tùng MTP</h4>
                    <ul>
                        <li>Âm Nhạc</li>
                        <li>Nghệ Sĩ</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
                <a href="https://www.youtube.com/watch?v=XshE1pQspsQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                  <div class="work__item__hover">
                    <h4>Dancing in the Dark - Sobin Hoàng Sơn</h4>
                    <ul>
                        <li>Âm Nhạc</li>
                        <li>Nghệ Sĩ</li>
                    </ul>
                </div>
            </div>
            <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
                <a href="https://www.youtube.com/watch?v=INK9Q275Nbo" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Giấc Mơ Thần Tiên - Gia Hân (STU Guitar Club)</h4>
                    <ul>
                        <li>Âm Nhạc</li>
                        <li>Câu Lạc Bộ</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
                <a href="https://www.youtube.com/watch?v=2iW1evY4m1E" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                   <div class="work__item__hover">
                    <h4>Cách Học Ielts - Khánh Vy</h4>
                    <ul>
                        <li>Học Tập</li>
                        <li>Tiếng Anh</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
                <a href="https://www.youtube.com/watch?v=NFebkcCKkeU" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Học Tiếng Anh qua Phim - Harry Potter</h4>
                    <ul>
                        <li>Học Tập</li>
                        <li>Tiếng Anh</li>
                    </ul>
                </div>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
                <a href="https://www.youtube.com/watch?v=yR6tVxgDWLk" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Việt Nam Của Chúng Ta</h4>
                    <ul>
                        <li>Du Lịch</li>
                        <li>Việt Nam</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">752</h2>
                                <p>Products Sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">450</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">852</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section id="team" class="team spad set-bg" data-setbg="img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h4>TÔ NGUYỄN GIA HÂN</h4>
                            <p>Chuyên Gia Tư Vấn</p>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/han.to.581"><i class="fa fa-facebook"></i></a>
                                <a href="https://studio.youtube.com/channel/UCkn3XysdNacUASU_sjn6LUA"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.instagram.com/_ha.arryon_/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>VƯƠNG THIÊN HẠ</h4>
                            <p>Chuyên Gia Tư Vấn</p>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/han.to.581"><i class="fa fa-facebook"></i></a>
                                <a href="https://studio.youtube.com/channel/UCkn3XysdNacUASU_sjn6LUA"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.instagram.com/_ha.arryon_/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>HẠT DẺ CƯỜI</h4>
                            <p>Chuyên Gia Tư Vấn</p>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/han.to.581"><i class="fa fa-facebook"></i></a>
                                <a href="https://studio.youtube.com/channel/UCkn3XysdNacUASU_sjn6LUA"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.instagram.com/_ha.arryon_/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>HÂN PÉ</h4>
                            <p>Chuyên Gia Tư Vấn</p>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/han.to.581"><i class="fa fa-facebook"></i></a>
                                <a href="https://studio.youtube.com/channel/UCkn3XysdNacUASU_sjn6LUA"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.instagram.com/_ha.arryon_/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="{{route('contact')}}" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Contact Widget Section Begin -->
    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Địa Chỉ</h4>
                            <p>180 Cao Lỗ, P4, Q8, TP HCM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Hotline</h4>
                            <p>0702586700</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <p>Videoviewer@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>"Từ vô vàn video đến những nội dung thực sự đáng xem: Chúng tôi là chuyên gia định hướng gu xem của bạn."</h2>
                        <p>VideoViewer's To Han, Best videoviewer to work 2025</p>
                        <a href="{{route('portfolio')}}">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
@endsection
</x:layoutHome>