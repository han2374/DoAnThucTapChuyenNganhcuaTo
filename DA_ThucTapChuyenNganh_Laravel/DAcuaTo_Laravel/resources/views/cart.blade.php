<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    @if(isset($cart) && count($cart))
        <div class="row">
            <div class="col-lg-8">
                @foreach($cart as $item)
                    <div class="card mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4 col-md-3">
                                <img src="{{ $item->image ?? asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="{{ $item->title }}" style="height:120px; width:100%; object-fit:cover;">
                            </div>
                            <div class="col-8 col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">{{ $item->title }}</h5>
                                    <p class="text-muted mb-1">{{ Str::limit($item->description ?? $item->content, 100) }}</p>
                                    <small class="text-muted">Số lượng: {{ $item->quantity ?? 1 }}</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-right pr-3">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-2">{{ number_format(($item->price ?? 0) * ($item->quantity ?? 1),0,',','.') }} VND</p>
                                    <a href="{{ route('cart') }}?remove={{ $item->id }}" class="btn btn-sm btn-outline-danger">Xóa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Tổng cộng</h5>
                        <hr />
                        <p class="d-flex justify-content-between"><span>Subtotal</span><span>{{ number_format($subtotal ?? 0,0,',','.') }} VND</span></p>
                        <p class="d-flex justify-content-between"><span>Phí vận chuyển</span><span>{{ number_format($shipping ?? 0,0,',','.') }} VND</span></p>
                        <hr />
                        <p class="d-flex justify-content-between font-weight-bold"><span>Tổng</span><span>{{ number_format(($subtotal ?? 0) + ($shipping ?? 0),0,',','.') }} VND</span></p>
                        <a href="{{ route('checkout') }}" class="btn btn-primary btn-block">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center" style="padding:80px 0;">
            <img src="{{ asset('img/empty-cart.png') }}" alt="empty" style="max-width:140px;opacity:0.7;margin-bottom:20px;"/>
            <h4 class="text-muted">Giỏ hàng trống</h4>
            <p class="text-muted">Thêm sản phẩm vào giỏ để bắt đầu.</p>
            <a href="{{ route('portfolio') }}" class="btn btn-primary">Tiếp tục mua sắm</a>
        </div>
    @endif
</div>
@endsection
</x:layoutHome>     