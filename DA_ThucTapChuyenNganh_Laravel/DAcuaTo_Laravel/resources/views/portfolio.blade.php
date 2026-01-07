<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Video</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        @foreach(($topics ?? []) as $topic)
                            <li data-filter=".{{ \Illuminate\Support\Str::slug($topic->name) }}">
                                <span style="color:inherit; text-decoration:none; cursor:pointer;">{{ $topic->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                @foreach(($topics ?? []) as $topic)
                    @php $topicSlug = \Illuminate\Support\Str::slug($topic->name); @endphp
                    @foreach($topic->videos ?? [] as $video)
                        @if(isset($video->status) && $video->status != 1)
                            @continue
                        @endif
                        <div class="col-lg-4 col-md-6 col-sm-6 mix {{ $topicSlug }}">
                            <div class="portfolio__item">
                                <div class="portfolio__item__video set-bg" data-setbg="{{ $video->image ? asset($video->image) : asset('img/portfolio/portfolio-1.jpg') }}">
                                    <a href="{{ $video->video ?: '#' }}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="portfolio__item__text">
                                    <h4>{{ $video->title ?? 'Untitled' }}</h4>
                                    @if(!empty($video->description))
                                        <span>{{ \Illuminate\Support\Str::limit($video->description, 60) }}</span>
                                    @else
                                        <ul>
                                            <li>{{ $topic->name }}</li>
                                        </ul>
                                    @endif

                                    <!-- Videos are not purchasable here; wishlist/cart apply to products and categories -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

@endsection
</x:layoutHome>