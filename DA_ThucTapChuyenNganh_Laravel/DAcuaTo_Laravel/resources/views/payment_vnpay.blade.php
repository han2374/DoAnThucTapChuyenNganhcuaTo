<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh Toán VN Pay </h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Thanh Toán VN Pay</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

<div class="container" style="padding:40px 0;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-dark">
                    <h4 class="card-title">Thanh toán qua VN Pay</h4>
                    <p>Order: <strong>#{{ $order->id }}</strong></p>
                    <p>Số tiền: <strong>{{ number_format($order->total,0,',','.') }} VND</strong></p>
                    <hr>
                    <p>Vui lòng quét mã thanh toán để chuyển tiền qua VN Pay</p>
                    <ul>
                        <li>Đến STK: <strong>{{ $merchant_phone }}</strong></li>
                        <li>Mã chuyển tiền (ghi chú): <strong>{{ $code }}</strong></li>
                        <img src="img/vnpay.jpg" alt="VN Pay QR Code" style="max-width:200px;"/>
                    </ul>
                    <p>Hướng dẫn nhanh: mở app VN Pay → Chuyển tiền → Nhập STK trên → Ghi chú mã chuyển → Hoàn tất chuyển tiền.</p>

                    <div class="mt-3">
                        <a href="{{ route('checkout.vnpay.return', ['order_id' => $order->id]) }}" class="btn btn-success">Tôi đã chuyển tiền — Xác nhận</a>
                        <a href="{{ route('orders') }}" class="btn btn-secondary">Quay về đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</x:layoutHome>
