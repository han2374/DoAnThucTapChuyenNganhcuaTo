<x:layoutAdmin>
@section('body')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Topic</h1>
    <form action="{{ route('admin.topic.update', ['topic' => $topic->id]) }}" method="POST">
        @csrf()
        @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Topic Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $topic->name }}" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
      <option value="active" {{ $topic->status==1 ? 'selected' : '' }}>On</option>
      <option value="inactive" {{ $topic->status==0 ? 'selected' : '' }}>Off</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{ route('admin.topic.index') }}" class="btn btn-primary" style="background-color: #6c757d; border-color: #6c757d;">
    Back</a>
</form>
</div>
@endsection
</x:layoutAdmin>
