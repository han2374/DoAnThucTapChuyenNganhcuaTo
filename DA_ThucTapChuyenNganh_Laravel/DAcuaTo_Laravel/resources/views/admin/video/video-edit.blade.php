<x:layoutAdmin>
@section('body')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Video</h1>
    <form action="{{ route('admin.video.update', ['video' => $video->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf()
        @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Video Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $video->title }}" aria-describedby="titleHelp">
  </div>
  <div class="mb-3">
    <label for="idtopic" class="form-label">Topic</label>
    <select name="idtopic" id="idtopic" class="form-control">
      <option value="">-- Chọn topic --</option>
      @foreach($topics as $t)
        <option value="{{ $t->id }}" {{ $video->idtopic == $t->id ? 'selected' : '' }}>{{ $t->name }}</option>
      @endforeach
    </select>
  </div>
    <div class="mb-3">
    <label for="image" class="form-label">Video Image (URL)</label>
    <input type="text" name="image" class="form-control" id="image" value="{{ $video->image }}" aria-describedby="imageHelp">
  </div>
  <div class="mb-3">
    <label for="video" class="form-label">Replace Video (optional)</label>
    <input type="file" name="video" class="form-control" id="video" accept="video/mp4,video/webm,video/ogg">
  </div>
    <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <input type="text" name="content" class="form-control" id="content" value="{{ $video->content }}" aria-describedby="contentHelp">
  </div>
    <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="description" value="{{ $video->description }}" aria-describedby="descriptionHelp">
  </div>
    <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="price" value="{{ $video->price }}" aria-describedby="priceHelp">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
      <option value="active" {{ $video->status==1 ? 'selected' : '' }}>Còn hàng</option>
      <option value="inactive" {{ $video->status==0 ? 'selected' : '' }}>Hết hàng</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px; margin-right: 10px; white-space: nowrap;">Save</button>
    <a href="{{ route('admin.video.index') }}" class="btn btn-primary" style="background-color: #6c757d; border-color: #6c757d; display: inline-flex; align-items: center; gap: 8px; white-space: nowrap;">
    Back</a>
</form>
</div>
@endsection
</x:layoutAdmin>
