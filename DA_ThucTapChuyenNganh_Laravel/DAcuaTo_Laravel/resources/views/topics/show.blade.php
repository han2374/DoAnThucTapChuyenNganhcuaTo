<x:layoutHome>
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{ $topic->name }}</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('topic.index') }}">Topics</a>
                            <span>{{ $topic->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; margin-bottom: 30px;">
                        <h3>{{ $topic->name }} - Videos</h3>
                        <p>Explore videos in this topic:</p>
                    </div>
                </div>
            </div>
            <div class="row portfolio__gallery">
                @forelse($topic->videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-6" style="margin-bottom: 30px;">
                        <div class="portfolio__item" style="position: relative;">
                            <div class="portfolio__item__video set-bg" data-setbg="{{ $video->image ?? 'img/portfolio/portfolio-1.jpg' }}" style="height: 250px; position: relative;">
                                <a href="{{ $video->video ?? '#' }}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="portfolio__item__text">
                                <h4>{{ $video->title }}</h4>
                                <ul>
                                    <li><strong>Topic:</strong> {{ $topic->name }}</li>
                                </ul>
                                <p style="font-size: 13px; color: #666; margin-top: 8px;"><strong>Nội dung:</strong> {{ Str::limit($video->content, 60) }}</p>
                                <p style="font-size: 13px; color: #666; margin-top: 5px;"><strong>Mô tả:</strong> {{ Str::limit($video->description, 60) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <p style="font-size: 18px; color: #888;">No videos in this topic yet.</p>
                    </div>
                @endforelse
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('topic.index') }}" class="btn btn-primary" style="background-color: #00d4ff; border-color: #00d4ff; padding: 10px 20px;">← Back to Topics</a>
                </div>
            </div>
        </div>
    </section>

@endsection
</x:layoutHome>
