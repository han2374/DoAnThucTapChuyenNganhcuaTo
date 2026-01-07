<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Sevices</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
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
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="img/calltos-bg.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>"Từ vô vàn video đến những nội dung thực sự đáng xem: Chúng tôi là chuyên gia định hướng gu xem của bạn."</h2>
                            <p>VideoViewer’s Tô Hân kết hợp mọi công cụ bạn cần để dễ dàng tiếp cận, quản lý và biến những video chuyên nghiệp trên YouTube thành kho tàng tri thức riêng của mình.</p>
                            <a href="{{route('portfolio')}}">Start your stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

@endsection
</x:layoutHome>