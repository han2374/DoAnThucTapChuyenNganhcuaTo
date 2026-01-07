<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Yêu Thích</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Favorite</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    @if(isset($items) && count($items))
        <div class="row">
            @foreach($items as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item->image ?? asset('img/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="{{ $item->title }}" style="height:180px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text text-muted mb-1">{{ Str::limit($item->description ?? $item->content, 80) }}</p>
                            <p class="font-weight-bold">{{ number_format($item->price ?? 0,0,',','.') }} VND</p>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('cart') }}?add={{ $item->id }}" class="btn btn-sm btn-primary">Thêm vào giỏ</a>
                                <a href="{{ route('wishlist') }}?remove={{ $item->id }}" class="btn btn-sm btn-outline-danger">Xóa</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center" style="padding:80px 0;">
            <img src="{{ asset('img/empty-box.png') }}" alt="empty" style="max-width:140px;opacity:0.7;margin-bottom:20px;"/>
            <h4 class="text-muted">Bạn chưa có sản phẩm yêu thích nào</h4>
            <p class="text-muted">Khám phá video và thêm vào yêu thích để lưu trữ lại.</p>
            <a href="{{ route('portfolio') }}" class="btn btn-primary">Bắt đầu khám phá</a>
        </div>
    @endif
</div>
@endsection
</x:layoutHome>
