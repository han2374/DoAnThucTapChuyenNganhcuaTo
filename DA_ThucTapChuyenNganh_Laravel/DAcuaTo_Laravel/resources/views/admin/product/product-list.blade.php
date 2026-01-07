<x:layoutAdmin>
@section('body')
<div class="card-footer" style="width: 100%; padding: 30px;">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Products</h1>
        <a href="{{route('admin.product.create')}}" class="btn btn-primary"  style="background-color: white; border-color: black; display: inline-flex; align-items: center; gap: 8px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg>    
        Add</a>
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Sản phẩm/Dịch vụ</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Loại Sản phẩm</th>
            <th scope="col">Mô tả Ngắn</th>
            <th scope="col">Giá (VNĐ)</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
         @forelse($products as $object)
        <tr>
            <td>{{ $object->id}}</td>
            <td>{{ $object->title }}</td>
            <td>{{ $object->category?->name ?? 'N/A' }}</td>
            <td><img src="{{ $object->image }}" alt="" style="width: 150px"></td>
            <td>{{ $object->content }}</td>
            <td>{{ $object->description }}</td>
            <td>{{ $object->price }}</td>
            <td> @if($object->status==1)
              Còn hàng
              @else
              Hết hàng
              @endif
            </td>
            <td class="action-buttons">
                <a href="{{ route('admin.product.edit', ['product' => $object->id]) }}"class="edit">Sửa</a>
                 {{-- Nút xoá --}}
                    <a href="#"
                       class="text-primary"
                       onclick="event.preventDefault(); 
                                if (confirm('Bạn có chắc chắn muốn xóa không?')) {
                                    document.getElementById('product-delete-{{ $object->id }}').submit();
                                }">
                        Xóa
                    </a>

                    {{-- Form xoá --}}
                    <form id="product-delete-{{ $object->id }}"
                          action="{{ route('admin.product.destroy', ['product' => $object->id]) }}"
                          method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
            </td>
        </tr>
         @empty
      <tr>
        <td colspan="7"><h1>Chua co du lieu</h1></td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection
</x:layoutAdmin>