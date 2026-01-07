<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @if(isset($posts) && $posts->count())
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item latest__item">
                                <h4>{{ $post->title }}</h4>
                                <ul>
                                    <li>{{ optional($post->published_at)->format('M d, Y') }}</li>
                                    <li>{{ $post->comments ?? 0 }} Comment</li>
                                </ul>
                                <p>{!! $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 150) !!}</p>
                                <a href="{{ route('blog.show', $post->slug) }}">Read more <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <p>No blog posts found.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
</x:layoutHome> 