<x:layoutHome>
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Topics</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Topics</span>
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
                        <h3>Our Topics</h3>
                        <p>Choose a topic to see videos:</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                @forelse($topics as $topic)
                    <div class="col-lg-4 col-md-6 col-sm-6" style="margin-bottom: 30px;">
                        <div class="portfolio__item" style="height: 100%; display: flex; flex-direction: column;">
                            <div class="portfolio__item__video set-bg" data-setbg="{{ $topic->image ?? 'img/portfolio/portfolio-1.jpg' }}" style="height: 250px;">
                                <div class="play-btn video-popup"><i class="fa fa-link"></i></div>
                            </div>
                            <div class="portfolio__item__text" style="flex-grow: 1; display: flex; flex-direction: column;">
                                <h4>{{ $topic->name }}</h4>
                                <p style="flex-grow: 1;">{{ $topic->videos->count() }} videos</p>
                                <a href="{{ route('topic.show', $topic->id) }}" style="color: #00d4ff; text-decoration: none; font-weight: bold;">View Videos →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <p style="font-size: 18px; color: #888;">No active topics available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
</x:layoutHome>
