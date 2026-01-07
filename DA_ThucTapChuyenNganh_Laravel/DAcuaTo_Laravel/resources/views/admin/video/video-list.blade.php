<x:layoutAdmin>
@section('body')

<div class="card-footer" style="width: 100%; padding: 5px;">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Video</h1>
        <a href="{{route('admin.video.create')}}" class="btn btn-primary" style="background-color: white; border-color: black; display: inline-flex; align-items: center; gap: 8px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg> Add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Video</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($videos as $object)
      <tr>
        <th scope="row">{{ $object->id }}</th>
        <td>{{ $object->title }}</td>
        <td><img src="{{ $object->image }}" alt="" style="width: 150px"></td>
        <td>
            @if($object->video)
                <video width="200" controls>
                    <source src="{{ asset('storage/'.$object->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
        </td>
        <td>
          @if($object->status==1)
            <span class="text-success">Active</span>
          @else
            <span class="text-muted">Inactive</span>
          @endif
        </td>
        <td><a href="{{ route('admin.video.edit', ['video' => $object->id]) }}"><i class="fa-solid fa-user-pen text-primary"></i></a></td>
        <td>
            <a href="#" class="text-primary" onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa không?')) { document.getElementById('video-delete-{{ $object->id }}').submit(); }">
                <i class="fa-solid fa-trash text-primary"></i>
            </a>
            <form id="video-delete-{{ $object->id }}" action="{{ route('admin.video.destroy', ['video' => $object->id]) }}" method="POST" style="display:none;">
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
</div>
@endsection
</x:layoutAdmin>
