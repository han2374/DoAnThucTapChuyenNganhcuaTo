<x:layoutHome> 
@section('body')
<!-- Blog Details Hero Begin -->
    <section class="blog-hero spad set-bg" data-setbg="img/blog/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <h2>{{ $post->title }}</h2>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li>{{ optional($post->published_at)->format('M d, Y') }}</li>
                            <li>{{ $post->comments ?? 0 }} Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            {!! $post->content !!}
                        </div>
                        <div class="blog__details__quote">
                            <p>"Easily create horizontal, square, or vertical videos tailored for Instagram Stories, Reels, and Feed posts. The perfect solution to optimize your brand's presence across every social network!"</p>
                            <h6>Tô Nguyễn Gia Hân</h6>
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <div class="blog__details__desc">
                            <p>Cập nhật số liệu: Thay vì 1.5 giờ (90 phút), con số 100 phút (hoặc "nearly 2 hours") thường được dùng trong các báo cáo marketing mới nhất để tăng tính thuyết phục.

Chỉnh sửa từ ngữ: * Thay "powerful marketing tool" (công cụ) bằng "powerful marketing engine" (động cơ) để tạo cảm giác mạnh mẽ hơn về việc thúc đẩy doanh số.

Thay "getting your message before the eyes" bằng "deliver your message to millions of potential customers" để nhấn mạnh vào đối tượng mục tiêu.

Bổ sung tính kết nối: Thêm câu "To turn viewers into buyers..." để tạo sự liền mạch với tiêu đề tiếng Việt mà bạn đã đặt ở trên.

Lời kêu gọi (Call to action): Thay đổi câu cuối để tập trung vào việc "thúc đẩy hành động" (take action) thay vì chỉ là "chia sẻ lên mạng xã hội".</p>
           
                        </div>
                        @if($post->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                        </div>
                        @endif
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    @php $prev = \App\Models\BlogPost::where('published_at','<', $post->published_at)->orderBy('published_at','desc')->first(); @endphp
                                    @if($prev)
                                    <a href="{{ route('blog.show', $prev->slug) }}" class="blog__details__option__item">
                                        <h5><i class="fa fa-angle-left"></i> Previous posts</h5>
                                        <div class="blog__details__option__item__img">
                                            <img src="{{ $prev->image ? asset('storage/'.$prev->image) : 'img/blog/prev.jpg' }}" alt="">
                                        </div>
                                        <div class="blog__details__option__item__text">
                                            <h6>{{ \Illuminate\Support\Str::limit($prev->title, 40) }}</h6>
                                            <span>{{ optional($prev->published_at)->format('M d, Y') }}</span>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    @php $next = \App\Models\BlogPost::where('published_at','>', $post->published_at)->orderBy('published_at','asc')->first(); @endphp
                                    @if($next)
                                    <a href="{{ route('blog.show', $next->slug) }}" class="blog__details__option__item blog__details__option__item--right">
                                        <h5>Next post <i class="fa fa-angle-right"></i></h5>
                                        <div class="blog__details__option__item__img">
                                            <img src="{{ $next->image ? asset('storage/'.$next->image) : 'img/blog/next.jpg' }}" alt="">
                                        </div>
                                        <div class="blog__details__option__item__text">
                                            <h6>{{ \Illuminate\Support\Str::limit($next->title, 40) }}</h6>
                                            <span>{{ optional($next->published_at)->format('M d, Y') }}</span>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__recent">
                            <h4>Recent Posts</h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <img src="img/blog/ri-1.jpg" alt="">
                                        <h5>What are the steps of a body lift procedure?</h5>
                                        <span>Dec 06, 2019</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <img src="img/blog/ri-2.jpg" alt="">
                                        <h5>What are the steps of a body lift procedure?</h5>
                                        <span>Dec 06, 2019</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <img src="img/blog/ri-3.jpg" alt="">
                                        <h5>How to shop for a cosm surgery procedure</h5>
                                        <span>Dec 06, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection
</x:layoutHome> 