<x:layoutAdmin>
@section('body')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Add Category</h1>
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf()
  <div class="mb-3">
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
  </div>
   <div class="mb-3">
    <label for="image" class="form-label">Category Image</label>
    <input type="text" name="image" class="form-control" id="image" aria-describedby="imageHelp">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
      <option value="active">On</option>
      <option value="inactive">Off</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Add new</button>
  <a href="{{ route('admin.category.index') }}" class="btn btn-primary" style="background-color: #6c757d; border-color: #6c757d;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg>
    <i class="bi bi-arrow-return-left"></i> Back</a>
</form>
</div>
@endsection
</x:layoutAdmin>
