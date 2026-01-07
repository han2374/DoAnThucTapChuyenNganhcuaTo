<x:layoutHome>
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Categories</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Categories Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; margin-bottom: 30px;">
                        <h3>Our Categories</h3>
                        <p>Choose a category to see products:</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                @forelse($categories as $category)
                    <div class="col-lg-4 col-md-6 col-sm-6" style="margin-bottom: 30px;">
                        <div class="portfolio__item" style="height: 100%; display: flex; flex-direction: column;">
                            <div class="portfolio__item__video set-bg" data-setbg="{{ $category->image ?? 'img/portfolio/portfolio-1.jpg' }}" style="height: 250px;">
                                <div class="play-btn video-popup"><i class="fa fa-link"></i></div>
                            </div>
                            <div class="portfolio__item__text" style="flex-grow: 1; display: flex; flex-direction: column;">
                                <h4>{{ $category->name }}</h4>
                                <p style="flex-grow: 1;">{{ $category->products->count() }} products</p>
                                <a href="{{ route('category.show', $category->id) }}" style="color: #00d4ff; text-decoration: none; font-weight: bold;">View Products →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <p style="font-size: 18px; color: #888;">No active categories available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

@endsection
</x:layoutHome>
