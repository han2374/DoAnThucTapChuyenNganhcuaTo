<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Đơn Hàng</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Đơn Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    @auth
        @if(isset($orders) && count($orders))
            <div class="list-group">
                @foreach($orders as $order)
                    <div class="list-group-item list-group-item-action mb-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Đơn #{{ $order->id }}</h5>
                            <small class="text-muted">{{ $order->created_at->format('d/m/Y') }}</small>
                        </div>
                        <p class="mb-1 text-muted">Tổng: <strong>{{ number_format($order->total ?? 0,0,',','.') }} VND</strong></p>
                        <small class="text-muted">Trạng thái: {{ $order->status ?? 'Đang xử lý' }}</small>
                        <div class="mt-2">
                            <a href="{{ route('orders') }}?view={{ $order->id }}" class="btn btn-sm btn-outline-primary">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center" style="padding:80px 0;">
                <img src="{{ asset('img/empty-box.png') }}" alt="empty" style="max-width:140px;opacity:0.7;margin-bottom:20px;"/>
                <h4 class="text-muted">Chưa có đơn hàng</h4>
                <p class="text-muted">Bạn chưa thực hiện đơn hàng nào. Bắt đầu mua sắm ngay.</p>
                <a href="{{ route('portfolio') }}" class="btn btn-primary">Khám phá</a>
            </div>
        @endif
    @endauth

    @guest
        <div class="text-center" style="padding:40px 0;">
            <p class="text-muted">Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để xem đơn hàng của bạn.</p>
        </div>
    @endguest
</div>
@endsection
</x:layoutHome>