<x:layoutAdmin>
@section('body')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Add Product</h1>
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf()
  <div class="mb-3">
    <label for="title" class="form-label">Product Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp">
  </div>
  <div class="mb-3">
    <label for="idcategory" class="form-label">Danh mục</label>
    <select name="idcategory" id="idcategory" class="form-control">
      <option value="">-- Chọn danh mục --</option>
      @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
      @endforeach
    </select>
  </div>
    <div class="mb-3">
    <label for="image" class="form-label">Product Image (URL)</label>
    <input type="text" name="image" class="form-control" id="image" aria-describedby="imageHelp">
  </div>
  <div class="mb-3">
    <label for="video" class="form-label">Product Video (optional)</label>
    <input type="file" name="video" class="form-control" id="video" accept="video/mp4,video/webm,video/ogg">
  </div>
    <div class="mb-3">
    <label for="content" class="form-label">Product Content</label>
    <input type="text" name="content" class="form-control" id="content" aria-describedby="contentHelp">
  </div>
    <div class="mb-3">
    <label for="description" class="form-label">Product Description</label>
    <input type="text" name="description" class="form-control" id="description" aria-describedby="descriptionHelp">
  </div>
    <div class="mb-3">
    <label for="price" class="form-label">Product Price</label>
    <input type="text" name="price" class="form-control" id="price" aria-describedby="priceHelp">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
      <option value="active">Còn hàng</option>
      <option value="inactive">Hết hàng</option>
    </select>
  </div>

  

  <button type="submit" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px; margin-right: 10px; white-space: nowrap;">Add new</button>
    <a href="{{ route('admin.category.index') }}" class="btn btn-primary" style="background-color: #6c757d; border-color: #6c757d; display: inline-flex; align-items: center; gap: 8px; white-space: nowrap;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg> Back</a>
</form>
</div>
@endsection
</x:layoutAdmin>