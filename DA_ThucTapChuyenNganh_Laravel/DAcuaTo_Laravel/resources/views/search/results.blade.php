<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Kết quả tìm kiếm @if($q) cho "{{ $q }}" @endif</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Search</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse($products as $p)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ $p->image ? asset($p->image) : asset('img/logo.png') }}" class="card-img-top" alt="{{ $p->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($p->description, 80) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12"><p>Không tìm thấy sản phẩm.</p></div>
        @endforelse
    </div>
    <div class="mt-3">{{ $products->links() }}</div>
</div>
@endsection
</x:layoutHome>
