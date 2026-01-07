<x:layoutHome>
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{ $category->name }}</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('category.index') }}">Categories</a>
                            <span>{{ $category->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Products Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; margin-bottom: 30px;">
                        <h3>{{ $category->name }} - Products</h3>
                        <p>Explore our products in this category:</p>
                    </div>
                </div>
            </div>
            <div class="row portfolio__gallery">
                @forelse($category->products as $product)
                    @php
                        $statusText = $product->status == 1 ? 'Còn hàng' : 'Hết hàng';
                        $statusColor = $product->status == 1 ? '#28a745' : '#dc3545';
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-6" style="margin-bottom: 30px;">
                        <div class="portfolio__item" style="position: relative;">
                            <div class="portfolio__item__video set-bg" data-setbg="{{ $product->image ?? 'img/portfolio/portfolio-1.jpg' }}" style="height: 250px; position: relative;">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                <div style="position: absolute; top: 10px; right: 10px; background-color: {{ $statusColor }}; color: white; padding: 5px 10px; border-radius: 3px; font-size: 12px; font-weight: bold;">
                                    {{ $statusText }}
                                </div>
                            </div>
                            <div class="portfolio__item__text">
                                <h4>{{ $product->title }}</h4>
                                <ul>
                                    <li><strong>Danh mục:</strong> {{ $category->name }}</li>
                                    <li><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VND</li>
                                </ul>
                                <p style="font-size: 13px; color: #666; margin-top: 8px;"><strong>Nội dung:</strong> {{ Str::limit($product->content, 60) }}</p>
                                <p style="font-size: 13px; color: #666; margin-top: 5px;"><strong>Mô tả:</strong> {{ Str::limit($product->description, 60) }}</p>

                                <!-- Detail button to open modal -->
                                <div style="margin-top:10px;">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#productModal-{{ $product->id }}">Xem chi tiết</button>
                                    <a href="{{ route('wishlist') }}?add={{ $product->id }}" class="btn btn-sm btn-outline-primary" style="margin-left:6px;">Yêu thích <i class="fa fa-heart" style="margin-left:6px"></i></a>
                                    <a href="{{ route('cart') }}?add={{ $product->id }}" class="btn btn-sm btn-primary" style="margin-left:6px;">Thêm vào giỏ <i class="fa fa-shopping-cart" style="margin-left:6px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Detail Modal -->
                    <div class="modal fade" id="productModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel-{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="productModalLabel-{{ $product->id }}">{{ $product->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ $product->image ?? asset('img/portfolio/portfolio-1.jpg') }}" alt="{{ $product->title }}" class="img-fluid" style="max-height:360px; width:100%; object-fit:cover; border-radius:6px;" />
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Danh mục:</strong> {{ $category->name }}</p>
                                            <p><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VND</p>
                                            <p><strong>Trạng thái:</strong> <span style="color: {{ $statusColor }}">{{ $statusText }}</span></p>
                                            <hr />
                                            <h6>Nội dung</h6>
                                            <p style="white-space:pre-wrap">{{ $product->content }}</p>
                                            <h6>Mô tả</h6>
                                            <p style="white-space:pre-wrap">{{ $product->description }}</p>
                                            <div style="margin-top:12px;">
                                                <a href="{{ route('wishlist') }}?add={{ $product->id }}" class="btn btn-outline-primary">Thêm vào yêu thích</a>
                                                <a href="{{ route('cart') }}?add={{ $product->id }}" class="btn btn-primary" style="margin-left:8px;">Thêm vào giỏ hàng</a>
                                                <a href="{{ route('cart') }}" class="btn btn-link" style="margin-left:10px;">Xem giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <p style="font-size: 18px; color: #888;">No products in this category yet.</p>
                    </div>
                @endforelse
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('category.index') }}" class="btn btn-primary" style="background-color: #00d4ff; border-color: #00d4ff; padding: 10px 20px;">← Back to Categories</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section End -->

@endsection
</x:layoutHome>
