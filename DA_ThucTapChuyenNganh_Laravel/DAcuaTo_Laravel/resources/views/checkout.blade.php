<x:layoutHome>
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh Toán</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Thanh Toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<div class="container" style="padding:40px 0;">
    <div class="row">
        <div class="col-lg-8">
            @if(isset($resolved) && $resolved->count())
                <div class="list-group mb-3">
                    @foreach($resolved as $r)
                        @php $it = $r->item; $p = $r->product; @endphp
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $p->title ?? $p->name ?? 'Item' }}</h5>
                                <small>{{ number_format($it->price ?? 0,0,',','.') }} VND x {{ $it->quantity }}</small>
                            </div>
                            <p class="mb-1 text-muted">{{ \Illuminate\Support\Str::limit($p->description ?? $p->content ?? '', 120) }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-dark">
                    <h5 class="card-title">Order Summary</h5>
                    <p class="card-text">Subtotal: <strong>{{ number_format($items->reduce(function($c,$i){ return $c + (($i->price??0)*$i->quantity); },0),0,',','.') }} VND</strong></p>
                    <form action="{{ route('checkout.place') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control text-dark" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-2">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control text-dark" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-2">
                            <label>Address</label>
                            <textarea name="address" class="form-control text-dark" rows="3">{{ old('address') }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label>Phương thức thanh toán</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pm_cash" value="cash" checked>
                                    <label class="form-check-label" for="pm_cash">Tiền mặt (COD)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pm_momo" value="momo">
                                    <label class="form-check-label" for="pm_momo">Momo</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pm_vnpay" value="vnpay">
                                    <label class="form-check-label" for="pm_vnpay">VNPAY</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Đặt Hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</x:layoutHome>